import { Button } from "@/components/ui/button";
import { Phone } from "lucide-react";
import heroDesktop from "@/assets/hero-desktop.jpg";
import heroMobile from "@/assets/hero-mobile.jpg";

const Hero = () => {
  return (
    <section className="relative min-h-[500px] md:min-h-[600px] flex items-center overflow-hidden">
      {/* Background images - mobile first */}
      <picture className="absolute inset-0">
        <source media="(min-width: 768px)" srcSet={heroDesktop} />
        <img 
          src={heroMobile}
          alt="Дети в детском саду Эдельвейс"
          className="w-full h-full object-cover"
          loading="eager"
          fetchPriority="high"
        />
      </picture>
      
      {/* Overlay gradient */}
      <div className="absolute inset-0 bg-gradient-to-r from-background/95 via-background/85 to-background/50" />
      
      {/* Cloud wave effect at bottom */}
      <div className="absolute bottom-0 left-0 right-0 h-16 md:h-24">
        <svg 
          viewBox="0 0 1440 120" 
          className="absolute bottom-0 w-full h-full"
          preserveAspectRatio="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path 
            d="M0,64 C240,100 480,100 720,64 C960,28 1200,28 1440,64 L1440,120 L0,120 Z" 
            fill="hsl(var(--background))"
          />
        </svg>
      </div>
      
      <div className="container mx-auto px-4 relative z-10 pt-8 pb-20 md:pb-24">
        <div className="max-w-2xl">
          <h2 className="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 leading-tight">
            Детский сад
            <span className="block text-primary mt-2">Эдельвейс</span>
          </h2>
          <p className="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 md:mb-8 text-foreground leading-relaxed">
            Путь к успеху начинается здесь. Развитие, обучение и забота о вашем ребенке в уютной атмосфере.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-3 md:gap-4 mb-6 md:mb-8">
            <Button size="lg" className="text-base md:text-lg px-6 md:px-8 shadow-lg hover:shadow-xl transition-shadow">
              <Phone className="mr-2 h-4 w-4 md:h-5 md:w-5" />
              Записаться на экскурсию
            </Button>
            <Button size="lg" variant="outline" className="text-base md:text-lg px-6 md:px-8 shadow-md hover:shadow-lg transition-shadow">
              Узнать подробнее
            </Button>
          </div>

          <div className="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4 pt-4 md:pt-6 border-t">
            <div className="bg-card/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md">
              <p className="text-2xl md:text-3xl font-bold text-primary mb-1">8:00 - 18:00</p>
              <p className="text-xs md:text-sm text-muted-foreground">Режим работы</p>
            </div>
            <div className="bg-card/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md">
              <p className="text-2xl md:text-3xl font-bold text-secondary mb-1">3 языка</p>
              <p className="text-xs md:text-sm text-muted-foreground">Изучение</p>
            </div>
            <div className="bg-card/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md col-span-2 md:col-span-1">
              <p className="text-2xl md:text-3xl font-bold text-accent mb-1">14 000 ₽</p>
              <p className="text-xs md:text-sm text-muted-foreground">В месяц</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
