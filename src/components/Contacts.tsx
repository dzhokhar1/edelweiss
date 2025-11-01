import { MapPin, Phone, Mail, Clock } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Card, CardContent } from "@/components/ui/card";

const Contacts = () => {
  return (
    <section id="contacts" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">Контакты</h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Приходите на экскурсию и познакомьтесь с нашим детским садом лично
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          <Card className="text-center hover:shadow-lg transition-shadow">
            <CardContent className="pt-8 pb-6">
              <div className="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                <MapPin className="h-8 w-8 text-primary" />
              </div>
              <h3 className="font-bold text-lg mb-2">Адреса</h3>
              <p className="text-muted-foreground text-sm mb-2">г. Грозный</p>
              <p className="text-muted-foreground text-sm">ул. Умара Кадырова, 7</p>
              <p className="text-muted-foreground text-sm">ул. Г.Н. Трошева, 100</p>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-lg transition-shadow">
            <CardContent className="pt-8 pb-6">
              <div className="w-16 h-16 mx-auto mb-4 rounded-full bg-secondary/10 flex items-center justify-center">
                <Phone className="h-8 w-8 text-secondary" />
              </div>
              <h3 className="font-bold text-lg mb-2">Телефоны</h3>
              <a href="tel:+79033899090" className="block text-muted-foreground hover:text-primary transition-colors mb-1">
                +7 903 389-90-90
              </a>
              <a href="tel:+79389992561" className="block text-muted-foreground hover:text-primary transition-colors">
                +7 938 999-25-61
              </a>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-lg transition-shadow">
            <CardContent className="pt-8 pb-6">
              <div className="w-16 h-16 mx-auto mb-4 rounded-full bg-accent/10 flex items-center justify-center">
                <Mail className="h-8 w-8 text-accent" />
              </div>
              <h3 className="font-bold text-lg mb-2">Email</h3>
              <a href="mailto:edelweiss@mail.ru" className="text-muted-foreground hover:text-primary transition-colors">
                edelweiss@mail.ru
              </a>
            </CardContent>
          </Card>

          <Card className="text-center hover:shadow-lg transition-shadow">
            <CardContent className="pt-8 pb-6">
              <div className="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                <Clock className="h-8 w-8 text-primary" />
              </div>
              <h3 className="font-bold text-lg mb-2">Режим работы</h3>
              <p className="text-muted-foreground">Пн-Пт: 8:00 - 18:00</p>
              <p className="text-muted-foreground text-sm mt-1">Сб-Вс: выходной</p>
            </CardContent>
          </Card>
        </div>

        <div className="max-w-2xl mx-auto text-center bg-gradient-to-r from-primary to-secondary text-white rounded-2xl p-12">
          <h3 className="text-3xl font-bold mb-4">Запишитесь на экскурсию</h3>
          <p className="text-lg mb-8 opacity-90">
            Приходите познакомиться с нашим детским садом, воспитателями и условиями. Мы с радостью покажем вам все наши классы и ответим на вопросы.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" variant="secondary" className="text-lg">
              <Phone className="mr-2 h-5 w-5" />
              Позвонить нам
            </Button>
            <Button size="lg" variant="outline" className="text-lg bg-white hover:bg-white/90 text-primary border-white">
              <Mail className="mr-2 h-5 w-5" />
              Написать email
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contacts;
