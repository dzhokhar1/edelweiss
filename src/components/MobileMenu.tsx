import { useState } from "react";
import { Menu, X, Phone, Mail } from "lucide-react";
import { Button } from "@/components/ui/button";
import {
  Sheet,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from "@/components/ui/sheet";

const MobileMenu = () => {
  const [open, setOpen] = useState(false);

  const menuItems = [
    { href: "#about", label: "О нас" },
    { href: "#programs", label: "Программы" },
    { href: "#reviews", label: "Отзывы" },
    { href: "#contacts", label: "Контакты" },
  ];

  const handleLinkClick = () => {
    setOpen(false);
  };

  return (
    <Sheet open={open} onOpenChange={setOpen}>
      <SheetTrigger asChild>
        <Button variant="ghost" size="icon" className="md:hidden">
          <Menu className="h-6 w-6" />
          <span className="sr-only">Открыть меню</span>
        </Button>
      </SheetTrigger>
      <SheetContent side="right" className="w-[300px] sm:w-[400px]">
        <SheetHeader>
          <SheetTitle className="text-left font-bold text-xl">
            Меню
          </SheetTitle>
        </SheetHeader>
        <nav className="flex flex-col gap-6 mt-8">
          {menuItems.map((item) => (
            <a
              key={item.href}
              href={item.href}
              onClick={handleLinkClick}
              className="text-lg font-medium hover:text-primary transition-colors py-2"
            >
              {item.label}
            </a>
          ))}
        </nav>
        
        <div className="mt-8 pt-8 border-t space-y-4">
          <div className="space-y-3">
            <p className="text-sm font-semibold text-muted-foreground">Контакты:</p>
            <a
              href="tel:+79033899090"
              className="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors"
            >
              <Phone className="h-5 w-5" />
              +7 903 389-90-90
            </a>
            <a
              href="tel:+79389992561"
              className="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors"
            >
              <Phone className="h-5 w-5" />
              +7 938 999-25-61
            </a>
            <a
              href="mailto:edelweiss@mail.ru"
              className="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors"
            >
              <Mail className="h-5 w-5" />
              edelweiss@mail.ru
            </a>
          </div>
          
          <Button className="w-full mt-6" size="lg" onClick={handleLinkClick}>
            Записаться на экскурсию
          </Button>
        </div>
      </SheetContent>
    </Sheet>
  );
};

export default MobileMenu;
