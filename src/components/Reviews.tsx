import { Card, CardContent } from "@/components/ui/card";
import { Star } from "lucide-react";

const Reviews = () => {
  const reviews = [
    {
      name: "Айшат М.",
      text: "Отличный детский сад! Ребенок с удовольствием ходит каждый день. Особенно нравятся занятия английским и музыкой. Воспитатели внимательные и профессиональные.",
      rating: 5
    },
    {
      name: "Хава С.",
      text: "Очень довольны подходом к детям. Логопед помог нашему сыну справиться с проблемами речи. Питание вкусное и разнообразное. Рекомендую всем!",
      rating: 5
    },
    {
      name: "Заур И.",
      text: "Сад превзошел все ожидания. Дочка научилась читать и считать, готова к школе. Очень благодарны всему коллективу Эдельвейса за профессионализм и заботу.",
      rating: 5
    },
    {
      name: "Малика А.",
      text: "Замечательное место для развития детей! Много внимания уделяется языкам, что для нас очень важно. Ребенок уже знает азы трех языков. Спасибо большое!",
      rating: 5
    }
  ];

  return (
    <section id="reviews" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">Отзывы родителей</h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Мы гордимся доверием родителей и счастливыми улыбками наших воспитанников
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
          {reviews.map((review, index) => (
            <Card key={index} className="hover:shadow-lg transition-shadow">
              <CardContent className="pt-6">
                <div className="flex gap-1 mb-4">
                  {[...Array(review.rating)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 fill-secondary text-secondary" />
                  ))}
                </div>
                <p className="text-lg mb-4 text-muted-foreground leading-relaxed">
                  "{review.text}"
                </p>
                <p className="font-semibold text-foreground">{review.name}</p>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="mt-12 text-center">
          <div className="inline-flex items-center gap-2 bg-primary text-primary-foreground px-8 py-4 rounded-full text-lg font-semibold">
            <Star className="h-6 w-6 fill-current" />
            <span>4.9 из 5 на основе отзывов родителей</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Reviews;
