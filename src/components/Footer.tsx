import { Phone, Mail, MapPin } from "lucide-react";
import logo from "@/assets/logo.png";

const Footer = () => {
  return (
    <footer className="bg-card border-t py-8 md:py-12 shadow-md">
      <div className="container mx-auto px-4">
        <div className="grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 mb-6 md:mb-8">
          <div>
            <div className="flex items-center gap-2 md:gap-3 mb-3 md:mb-4">
              <img 
                src={logo} 
                alt="Edelweiss" 
                className="h-8 md:h-10 w-auto"
                loading="lazy"
              />
              <div>
                <h3 className="font-bold text-base md:text-lg text-primary">EDELWEISS</h3>
                <p className="text-[10px] md:text-xs text-muted-foreground">частная гимназия</p>
              </div>
            </div>
            <p className="text-xs md:text-sm text-muted-foreground leading-relaxed">
              Детский сад «Эдельвейс» — место, где ваш ребенок растет и развивается в атмосфере заботы и профессионализма.
            </p>
          </div>

          <div>
            <h4 className="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Навигация</h4>
            <ul className="space-y-2 text-xs md:text-sm text-muted-foreground">
              <li><a href="#about" className="hover:text-primary transition-colors">О нас</a></li>
              <li><a href="#programs" className="hover:text-primary transition-colors">Программы</a></li>
              <li><a href="#reviews" className="hover:text-primary transition-colors">Отзывы</a></li>
              <li><a href="#contacts" className="hover:text-primary transition-colors">Контакты</a></li>
            </ul>
          </div>

          <div>
            <h4 className="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Контакты</h4>
            <ul className="space-y-2 md:space-y-3 text-xs md:text-sm text-muted-foreground">
              <li className="flex items-start gap-2">
                <Phone className="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" />
                <div>
                  <a href="tel:+79033899090" className="hover:text-primary transition-colors block">
                    +7 903 389-90-90
                  </a>
                  <a href="tel:+79389992561" className="hover:text-primary transition-colors block">
                    +7 938 999-25-61
                  </a>
                </div>
              </li>
              <li className="flex items-start gap-2">
                <Mail className="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" />
                <a href="mailto:edelweiss@mail.ru" className="hover:text-primary transition-colors">
                  edelweiss@mail.ru
                </a>
              </li>
            </ul>
          </div>

          <div>
            <h4 className="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Адреса</h4>
            <ul className="space-y-2 md:space-y-3 text-xs md:text-sm text-muted-foreground">
              <li className="flex items-start gap-2">
                <MapPin className="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" />
                <span>г. Грозный, ул. Умара Кадырова, 7</span>
              </li>
              <li className="flex items-start gap-2">
                <MapPin className="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" />
                <span>г. Грозный, ул. Г.Н. Трошева, 100</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="pt-6 md:pt-8 border-t text-center text-[10px] md:text-xs lg:text-sm text-muted-foreground">
          <p>© 2025 ИП Жамалуллайла Медина Сайд-Эмидиновна. Детский сад «Эдельвейс». Все права защищены.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
