import { Button } from "@/components/ui/button";
import { Phone } from "lucide-react";
import heroImage from "@/assets/children-playing.jpg";

const Hero = () => {
  return (
    <section className="relative min-h-[600px] flex items-center overflow-hidden">
      <div 
        className="absolute inset-0 bg-cover bg-center"
        style={{ backgroundImage: `url(${heroImage})` }}
      >
        <div className="absolute inset-0 bg-gradient-to-r from-background/95 via-background/85 to-background/60" />
      </div>
      
      <div className="container mx-auto px-4 relative z-10">
        <div className="max-w-2xl">
          <h2 className="text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Детский сад
            <span className="block text-primary">Эдельвейс</span>
          </h2>
          <p className="text-xl md:text-2xl mb-8 text-muted-foreground leading-relaxed">
            Путь к успеху начинается здесь. Развитие, обучение и забота о вашем ребенке в уютной атмосфере.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 mb-8">
            <Button size="lg" className="text-lg px-8">
              <Phone className="mr-2 h-5 w-5" />
              Записаться на экскурсию
            </Button>
            <Button size="lg" variant="outline" className="text-lg px-8">
              Узнать подробнее
            </Button>
          </div>

          <div className="grid grid-cols-2 md:grid-cols-3 gap-4 pt-6 border-t">
            <div>
              <p className="text-3xl font-bold text-primary mb-1">8:00 - 18:00</p>
              <p className="text-sm text-muted-foreground">Режим работы</p>
            </div>
            <div>
              <p className="text-3xl font-bold text-secondary mb-1">3 языка</p>
              <p className="text-sm text-muted-foreground">Изучение</p>
            </div>
            <div>
              <p className="text-3xl font-bold text-accent mb-1">14 000 ₽</p>
              <p className="text-sm text-muted-foreground">В месяц</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
