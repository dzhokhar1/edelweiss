import { Languages, Music, Speech, BookOpen } from "lucide-react";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import languageImage from "@/assets/language-learning.jpg";
import musicImage from "@/assets/music-class.jpg";
import speechImage from "@/assets/speech-therapy.jpg";

const Programs = () => {
  const programs = [
    {
      icon: Languages,
      title: "Изучение языков",
      description: "Азы английского, арабского и чеченского языков",
      image: languageImage,
      color: "bg-primary"
    },
    {
      icon: Music,
      title: "Музыкальные занятия",
      description: "Развитие музыкального слуха и творческих способностей",
      image: musicImage,
      color: "bg-secondary"
    },
    {
      icon: Speech,
      title: "Логопед",
      description: "Коррекция речи и развитие правильной артикуляции",
      image: speechImage,
      color: "bg-accent"
    },
    {
      icon: BookOpen,
      title: "Обучение чтению",
      description: "Подготовка к школе и обучение основам грамоты",
      image: languageImage,
      color: "bg-primary"
    }
  ];

  return (
    <section id="programs" className="py-12 md:py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12 md:mb-16">
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Наши программы</h2>
          <p className="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto">
            Комплексный подход к развитию ребенка: языки, творчество, логопедия и подготовка к школе
          </p>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
          {programs.map((program, index) => {
            const Icon = program.icon;
            return (
              <Card key={index} className="overflow-hidden hover:shadow-xl transition-all duration-300 group border border-border/50 shadow-md">
                <div className="relative h-40 md:h-48 overflow-hidden">
                  <img 
                    src={program.image} 
                    alt={program.title}
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    loading="lazy"
                  />
                  <div className={`absolute top-3 md:top-4 left-3 md:left-4 w-10 h-10 md:w-12 md:h-12 rounded-2xl ${program.color} flex items-center justify-center shadow-lg`}>
                    <Icon className="h-5 w-5 md:h-6 md:w-6 text-white" />
                  </div>
                </div>
                <CardHeader className="p-4 md:p-6">
                  <CardTitle className="text-lg md:text-xl font-display">{program.title}</CardTitle>
                  <CardDescription className="text-sm md:text-base">{program.description}</CardDescription>
                </CardHeader>
              </Card>
            );
          })}
        </div>

        <div className="mt-12 md:mt-16 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 rounded-3xl p-6 md:p-12 shadow-lg">
          <div className="grid md:grid-cols-2 gap-6 md:gap-8 items-center">
            <div>
              <h3 className="text-2xl md:text-3xl font-bold mb-3 md:mb-4 font-display">Стоимость</h3>
              <div className="text-4xl md:text-5xl font-bold text-primary mb-3 md:mb-4">14 000 ₽</div>
              <p className="text-base md:text-lg lg:text-xl text-muted-foreground mb-4 md:mb-6">
                в месяц за полный день с питанием и всеми образовательными программами
              </p>
              <ul className="space-y-2 md:space-y-3">
                <li className="flex items-center gap-2 text-sm md:text-base">
                  <div className="w-2 h-2 rounded-full bg-primary flex-shrink-0" />
                  <span>4-разовое питание</span>
                </li>
                <li className="flex items-center gap-2 text-sm md:text-base">
                  <div className="w-2 h-2 rounded-full bg-secondary flex-shrink-0" />
                  <span>Все образовательные программы включены</span>
                </li>
                <li className="flex items-center gap-2 text-sm md:text-base">
                  <div className="w-2 h-2 rounded-full bg-accent flex-shrink-0" />
                  <span>Занятия с логопедом</span>
                </li>
              </ul>
            </div>
            <div className="bg-card p-6 md:p-8 rounded-2xl border shadow-lg">
              <h4 className="text-xl md:text-2xl font-bold mb-3 md:mb-4 font-display">Что входит в программу?</h4>
              <ul className="space-y-2 md:space-y-3 text-muted-foreground text-sm md:text-base">
                <li>✓ Изучение английского, арабского, чеченского языков</li>
                <li>✓ Музыкальные занятия</li>
                <li>✓ Занятия с логопедом</li>
                <li>✓ Обучение чтению</li>
                <li>✓ Подготовка к первому классу</li>
                <li>✓ Развивающие игры и творчество</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Programs;
