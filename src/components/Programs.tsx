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
    <section id="programs" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">Наши программы</h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Комплексный подход к развитию ребенка: языки, творчество, логопедия и подготовка к школе
          </p>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
          {programs.map((program, index) => {
            const Icon = program.icon;
            return (
              <Card key={index} className="overflow-hidden hover:shadow-xl transition-shadow group">
                <div className="relative h-48 overflow-hidden">
                  <img 
                    src={program.image} 
                    alt={program.title}
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                  />
                  <div className={`absolute top-4 left-4 w-12 h-12 rounded-full ${program.color} flex items-center justify-center shadow-lg`}>
                    <Icon className="h-6 w-6 text-white" />
                  </div>
                </div>
                <CardHeader>
                  <CardTitle className="text-xl">{program.title}</CardTitle>
                  <CardDescription className="text-base">{program.description}</CardDescription>
                </CardHeader>
              </Card>
            );
          })}
        </div>

        <div className="mt-16 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 rounded-2xl p-8 md:p-12">
          <div className="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <h3 className="text-3xl font-bold mb-4">Стоимость</h3>
              <div className="text-5xl font-bold text-primary mb-4">14 000 ₽</div>
              <p className="text-xl text-muted-foreground mb-6">
                в месяц за полный день с питанием и всеми образовательными программами
              </p>
              <ul className="space-y-3">
                <li className="flex items-center gap-2">
                  <div className="w-2 h-2 rounded-full bg-primary" />
                  <span>4-разовое питание</span>
                </li>
                <li className="flex items-center gap-2">
                  <div className="w-2 h-2 rounded-full bg-secondary" />
                  <span>Все образовательные программы включены</span>
                </li>
                <li className="flex items-center gap-2">
                  <div className="w-2 h-2 rounded-full bg-accent" />
                  <span>Занятия с логопедом</span>
                </li>
              </ul>
            </div>
            <div className="bg-card p-8 rounded-xl border shadow-lg">
              <h4 className="text-2xl font-bold mb-4">Что входит в программу?</h4>
              <ul className="space-y-3 text-muted-foreground">
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
