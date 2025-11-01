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
    <section id="reviews" className="py-12 md:py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12 md:mb-16">
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Отзывы родителей</h2>
          <p className="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto">
            Мы гордимся доверием родителей и счастливыми улыбками наших воспитанников
          </p>
        </div>

        <div className="grid sm:grid-cols-2 gap-4 md:gap-6 max-w-5xl mx-auto">
          {reviews.map((review, index) => (
            <Card key={index} className="hover:shadow-xl transition-all duration-300 border border-border/50 shadow-md">
              <CardContent className="pt-4 md:pt-6 p-4 md:p-6">
                <div className="flex gap-1 mb-3 md:mb-4">
                  {[...Array(review.rating)].map((_, i) => (
                    <Star key={i} className="h-4 w-4 md:h-5 md:w-5 fill-secondary text-secondary" />
                  ))}
                </div>
                <p className="text-sm md:text-base lg:text-lg mb-3 md:mb-4 text-muted-foreground leading-relaxed">
                  "{review.text}"
                </p>
                <p className="font-semibold text-foreground text-sm md:text-base">{review.name}</p>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="mt-8 md:mt-12 text-center">
          <div className="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary/90 text-primary-foreground px-6 md:px-8 py-3 md:py-4 rounded-full text-base md:text-lg font-semibold shadow-lg">
            <Star className="h-5 w-5 md:h-6 md:w-6 fill-current" />
            <span>4.9 из 5 на основе отзывов родителей</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Reviews;
