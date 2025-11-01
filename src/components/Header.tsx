import { Phone, Mail } from "lucide-react";
import { Button } from "@/components/ui/button";
import logo from "@/assets/logo.png";

const Header = () => {
  return (
    <header className="sticky top-0 z-50 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/80 border-b">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-20">
          <div className="flex items-center gap-3">
            <img src={logo} alt="Edelweiss" className="h-12 w-auto" />
            <div>
              <h1 className="text-xl font-bold text-foreground">EDELWEISS</h1>
              <p className="text-xs text-muted-foreground">частная гимназия</p>
            </div>
          </div>
          
          <nav className="hidden md:flex items-center gap-6">
            <a href="#about" className="text-sm font-medium hover:text-primary transition-colors">
              О нас
            </a>
            <a href="#programs" className="text-sm font-medium hover:text-primary transition-colors">
              Программы
            </a>
            <a href="#reviews" className="text-sm font-medium hover:text-primary transition-colors">
              Отзывы
            </a>
            <a href="#contacts" className="text-sm font-medium hover:text-primary transition-colors">
              Контакты
            </a>
          </nav>

          <div className="flex items-center gap-3">
            <a href="tel:+79033899090" className="hidden lg:flex items-center gap-2 text-sm font-medium text-foreground hover:text-primary transition-colors">
              <Phone className="h-4 w-4" />
              +7 903 389-90-90
            </a>
            <Button size="sm" className="hidden sm:flex">
              <Mail className="h-4 w-4 mr-2" />
              Записаться
            </Button>
          </div>
        </div>
      </div>
    </header>
  );
};

export default Header;
