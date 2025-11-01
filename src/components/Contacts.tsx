import { MapPin, Phone, Mail, Clock } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Card, CardContent } from "@/components/ui/card";

const Contacts = () => {
  return (
    <section id="contacts" className="py-12 md:py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12 md:mb-16">
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Контакты</h2>
          <p className="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto">
            Приходите на экскурсию и познакомьтесь с нашим детским садом лично
          </p>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8 md:mb-12">
          <Card className="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50">
            <CardContent className="pt-6 md:pt-8 pb-4 md:pb-6 p-4 md:p-6">
              <div className="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm">
                <MapPin className="h-7 w-7 md:h-8 md:w-8 text-primary" />
              </div>
              <h3 className="font-bold text-base md:text-lg mb-2 font-display">Адреса</h3>
              <p className="text-muted-foreground text-xs md:text-sm mb-1 md:mb-2">г. Грозный</p>
              <p className="text-muted-foreground text-xs md:text-sm">ул. Умара Кадырова, 7</p>
              <p className="text-muted-foreground text-xs md:text-sm">ул. Г.Н. Трошева, 100</p>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50">
            <CardContent className="pt-6 md:pt-8 pb-4 md:pb-6 p-4 md:p-6">
              <div className="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-secondary/10 flex items-center justify-center shadow-sm">
                <Phone className="h-7 w-7 md:h-8 md:w-8 text-secondary" />
              </div>
              <h3 className="font-bold text-base md:text-lg mb-2 font-display">Телефоны</h3>
              <a href="tel:+79033899090" className="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors mb-1">
                +7 903 389-90-90
              </a>
              <a href="tel:+79389992561" className="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors">
                +7 938 999-25-61
              </a>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50">
            <CardContent className="pt-6 md:pt-8 pb-4 md:pb-6 p-4 md:p-6">
              <div className="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-accent/10 flex items-center justify-center shadow-sm">
                <Mail className="h-7 w-7 md:h-8 md:w-8 text-accent" />
              </div>
              <h3 className="font-bold text-base md:text-lg mb-2 font-display">Email</h3>
              <a href="mailto:edelweiss@mail.ru" className="text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors">
                edelweiss@mail.ru
              </a>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50">
            <CardContent className="pt-6 md:pt-8 pb-4 md:pb-6 p-4 md:p-6">
              <div className="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm">
                <Clock className="h-7 w-7 md:h-8 md:w-8 text-primary" />
              </div>
              <h3 className="font-bold text-base md:text-lg mb-2 font-display">Режим работы</h3>
              <p className="text-xs md:text-sm text-muted-foreground">Пн-Пт: 8:00 - 18:00</p>
              <p className="text-xs md:text-sm text-muted-foreground mt-1">Сб-Вс: выходной</p>
            </CardContent>
          </Card>
        </div>

        <div className="max-w-2xl mx-auto text-center bg-gradient-to-r from-primary via-primary/95 to-primary/90 text-white rounded-3xl p-8 md:p-12 shadow-xl">
          <h3 className="text-2xl md:text-3xl font-bold mb-3 md:mb-4 font-display">Запишитесь на экскурсию</h3>
          <p className="text-sm md:text-base lg:text-lg mb-6 md:mb-8 opacity-95">
            Приходите познакомиться с нашим детским садом, воспитателями и условиями. Мы с радостью покажем вам все наши классы и ответим на вопросы.
          </p>
          <div className="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center">
            <Button size="lg" variant="secondary" className="text-base md:text-lg shadow-lg hover:shadow-xl transition-shadow">
              <Phone className="mr-2 h-4 w-4 md:h-5 md:w-5" />
              Позвонить нам
            </Button>
            <Button size="lg" variant="outline" className="text-base md:text-lg bg-white hover:bg-white/90 text-primary border-white shadow-lg hover:shadow-xl transition-shadow">
              <Mail className="mr-2 h-4 w-4 md:h-5 md:w-5" />
              Написать email
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contacts;
