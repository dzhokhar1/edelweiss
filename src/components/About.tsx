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
    <section id="about" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">О детском саде Эдельвейс</h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Мы создаем комфортную среду для развития ваших детей, где они учатся, играют и растут в атмосфере заботы и профессионализма
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-8 mb-16">
          <div className="space-y-6">
            {features.map((feature, index) => {
              const Icon = feature.icon;
              return (
                <div key={index} className="flex gap-4 p-6 bg-card rounded-lg border hover:shadow-lg transition-shadow">
                  <div className="flex-shrink-0">
                    <div className="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                      <Icon className="h-6 w-6 text-primary" />
                    </div>
                  </div>
                  <div>
                    <h3 className="text-xl font-bold mb-2">{feature.title}</h3>
                    <p className="text-muted-foreground">{feature.description}</p>
                  </div>
                </div>
              );
            })}
          </div>

          <div className="grid grid-rows-2 gap-4">
            <div className="relative overflow-hidden rounded-lg">
              <img 
                src={classroomImage} 
                alt="Классная комната" 
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
              />
            </div>
            <div className="relative overflow-hidden rounded-lg">
              <img 
                src={buildingImage} 
                alt="Здание детского сада" 
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
              />
            </div>
          </div>
        </div>

        <div className="bg-primary text-primary-foreground rounded-2xl p-8 md:p-12 text-center">
          <h3 className="text-3xl font-bold mb-4">ИП Жамалуллайла Медина Сайд-Эмидиновна</h3>
          <p className="text-xl opacity-90">
            Детский сад «Эдельвейс» — это место, где каждый ребенок получает качественное образование и заботу
          </p>
        </div>
      </div>
    </section>
  );
};

export default About;
