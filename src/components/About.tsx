import { Clock, Utensils, Users, GraduationCap } from "lucide-react";
import classroomImage from "@/assets/classroom.jpg";
import buildingImage from "@/assets/building.jpg";

const About = () => {
  const features = [
    {
      icon: Clock,
      title: "Удобный график",
      description: "Работаем с 8:00 до 18:00 в будние дни, полный день"
    },
    {
      icon: Utensils,
      title: "4-разовое питание",
      description: "Сбалансированное меню, учитывающее все потребности детей"
    },
    {
      icon: Users,
      title: "Малые группы",
      description: "Индивидуальный подход к каждому ребенку"
    },
    {
      icon: GraduationCap,
      title: "Подготовка к школе",
      description: "Обучение чтению и подготовка к первому классу"
    }
  ];

  return (
    <section id="about" className="py-12 md:py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12 md:mb-16">
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">О детском саде Эдельвейс</h2>
          <p className="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto">
            Мы создаем комфортную среду для развития ваших детей, где они учатся, играют и растут в атмосфере заботы и профессионализма
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-6 md:gap-8 mb-12 md:mb-16">
          <div className="space-y-4 md:space-y-6">
            {features.map((feature, index) => {
              const Icon = feature.icon;
              return (
                <div key={index} className="flex gap-4 p-4 md:p-6 bg-card rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 border border-border/50">
                  <div className="flex-shrink-0">
                    <div className="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm">
                      <Icon className="h-6 w-6 md:h-7 md:w-7 text-primary" />
                    </div>
                  </div>
                  <div>
                    <h3 className="text-lg md:text-xl font-bold mb-1 md:mb-2 font-display">{feature.title}</h3>
                    <p className="text-sm md:text-base text-muted-foreground">{feature.description}</p>
                  </div>
                </div>
              );
            })}
          </div>

          <div className="grid grid-rows-2 gap-4">
            <div className="relative overflow-hidden rounded-2xl shadow-lg">
              <img 
                src={classroomImage} 
                alt="Классная комната" 
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                loading="lazy"
              />
            </div>
            <div className="relative overflow-hidden rounded-2xl shadow-lg">
              <img 
                src={buildingImage} 
                alt="Здание детского сада" 
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                loading="lazy"
              />
            </div>
          </div>
        </div>

        <div className="bg-gradient-to-br from-primary to-primary/90 text-primary-foreground rounded-3xl p-6 md:p-12 text-center shadow-xl">
          <h3 className="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 font-display">ИП Жамалуллайла Медина Сайд-Эмидиновна</h3>
          <p className="text-base md:text-lg lg:text-xl opacity-95">
            Детский сад «Эдельвейс» — это место, где каждый ребенок получает качественное образование и заботу
          </p>
        </div>
      </div>
    </section>
  );
};

export default About;
