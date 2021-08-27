MySql script to create and populate post table:
```sql
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(500) DEFAULT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `post` (`id`, `title`, `subtitle`, `body`, `date`) VALUES
(1, 'Kim jest programista full stack?', 'Kim są, czym się wyróżniają, jakie możliwości przed nimi stoją i kto szuka ich najczęściej? Właśnie na te pytania postaramy się dziś odpowiedzieć.', '<p class=\"article__description--content\"><p><strong>Z tekstu dowiesz się:</strong></p>\r\n<ul>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">kim jest programista full stack,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">jakie kompetencje go wyróżniają,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">jakie są zalety bycia full stack developerem,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">jaki wygląda rynek pracy dla programistów full stack,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">jak zostać full stack developerem,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">ile zarabia full stack developer.</p>\r\n</li>\r\n</ul>\r\n<p>Wyobraź sobie magika w świecie IT. Kogo widzisz? Osobę związaną z programowaniem, to jasne, ale czy wyróżnia się ona czymś jeszcze? Na pewno skalą i różnorodnością swoich kompetencji. Magik, o którym mowa, zna się praktycznie na wszystkich aspektach programowania. Magika, o którym mowa, nazywamy <strong>full stack developerem</strong>.</p>\r\n<p><strong>Przeczytaj także: </strong><a href=\"https://coderslab.pl/pl/blog/start-w-branzy-it-od-czego-zaczac\" target=\"_blank\" rel=\"noopener\">Start w branży IT – od czego zacząć?</a></p>\r\n<h2>Programista full stack – kto to?</h2>\r\n<p>Full stack developer. Co to znaczy? Kto to? Te pytania pojawiają się bardzo często. Aby zrozumieć dokładną definicję full stack programisty, trzeba wiedzieć, czym jest stos (ang. stack) technologiczny. Nazywamy tak cały zbiór elementów składających się na oprogramowanie komputera, m.in.:</p>\r\n<ul>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">system operacyjny,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">bazy danych,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">narzędzi do zarządzania środowiskiem,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">serwer aplikacji czy serwer WWW.</p>\r\n</li>\r\n</ul>\r\n<p>Jak widzisz, w stos technologiczny wchodzą zarówno zagadnienia typowe dla front-endu, jak i back-endu. Full stack developer sprawnie porusza się między obiema tymi kategoriami. W razie potrzeby może, ponieważ umie, samodzielnie zaprojektować aplikację od początku do końca. Zajmuje się on wtedy zarówno przygotowaniem logicznej mechaniki działania, administracją serwera czy bazy danych, jak i projektowaniem wizualnej odsłony produktu, kodowaniem oraz integracją systemów.</p>\r\n<p>Można zatem powiedzieć, że full stack developer jest programistą z kategorii „zrobię wszystko”. Właśnie dlatego na rynku często jest nie tyle towarem deficytowym, co świętym graalem. Zwłaszcza w takich sytuacjach, jak np. pandemia lub inne zachwiania rynku.</p>\r\n<h2>Od szczegółu do ogółu – co musisz wiedzieć i umieć</h2>\r\n<p>Full stack developerem zostaje najczęściej programista z kilkuletnią praktyką. Dzięki temu dużo łatwiej mu nie tylko rozbudować wiedzę o inne zagadnienia, ale i zrozumieć oraz połączyć ze sobą poszczególne elementy całego procesu. Konieczne są do tego konkretne umiejętności oraz znajomość narzędzi, technologii i języków ściśle związanych z poszczególnymi etapami tworzenia aplikacji webowych. Zaliczamy do nich na pewno znajomość/wiedzę na temat:</p>\r\n<ul>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">HTML/CSS – czyli języka znaczników, dzięki któremu sprawnie opiszesz wygląd przechowywanej treści, określisz tytuły, wskażesz linki w tekście itp.,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\"><a href=\"https://coderslab.pl/pl/kurs/javascript-developer-react/o-kursie\" target=\"_blank\" rel=\"noopener\">JavaScript</a> – tj. języka programowania (front-end), za sprawą którego stworzysz wszelkie interaktywności na stronie (animacje, przejścia, itp.),</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">minimum jednego język używanego w back-endzie, np. <a href=\"https://coderslab.pl/pl/kurs/back-end-developer-python/o-kursie\" target=\"_blank\" rel=\"noopener\">Python</a>, Java czy PHP,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">pracy z systemem kontroli wersji Git,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">baz danych opartych np. na SQL – są one ważnym elementem wielu aplikacji, np. sprzedażowych,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">pracy z co najmniej jednym popularnym frameworkiem zarówno front-end (np. <a href=\"https://coderslab.pl/pl/kurs/javascript-specialist-react-redux/o-kursie\">React</a>), jak i back-end (np. Spring),</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">środowiska Node.js oraz związanych z nim narzędzi,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">protokołu HTTP oraz zasad projektowania REST API.</p>\r\n</li>\r\n</ul>\r\n<p>Przydatna będzie również wiedza ogólna związana z architekturą nowoczesnych aplikacji webowych. W końcu nie tylko mają one prawidłowo działać i dobrze wyglądać, ale także – być praktyczne i użyteczne.</p>\r\n<p>Przeczytaj także: <a href=\"https://coderslab.pl/pl/blog/od-juniora-do-seniora-w-it\" target=\"_blank\" rel=\"noopener\">Od juniora do seniora w IT</a></p>\r\n<h2>Zalety bycia programistą full stack</h2>\r\n<p>Powyższa lista nieco Cię przeraziła? No cóż, bycie full stack developerem to na pewno bardzo wymagająca praca. Kryje się za tym jednak wiele korzyści, które sprawiają, że ta wizja kariery zawodowej zaczyna nabierać rumieńców.</p>\r\n<p>My wymienimy tylko 3 z nich, żeby Cię nie zanudzić. Możesz jednak uwierzyć nam na słowo, że znajdzie się ich znacznie więcej.</p>\r\n<p>Poznaj 3 zalety pracy jako programista full stack:</p>\r\n<p><strong>1. Więcej ofert pracy</strong></p>\r\n<p>Gdybyś w pewnym momencie swojego życia nie zainwestował naprawdę dużo czasu w pracę nad swoimi praktycznymi umiejętnościami, ten nie mógłbyś na to liczyć. Poza tym, jeśli staniesz się full stack developerem, to nie tylko na tym stanowisku będziesz mógł pracować. Równie dobrze – w razie konieczności – odnajdziesz się na stanowisku front- czy back-endowym. Możesz więc czuć się bezpiecznie niezależnie od sytuacji. A to, jak wiemy po wydarzeniach z 2020 roku, zapewni Ci większy spokój ducha i komfort życia.</p>\r\n<p><strong>2. Szybszy rozwój</strong></p>\r\n<p>Nie chodzi o to, że w ciągu miesiąca staniesz się full stack developerem, bo, jak napisaliśmy wyżej, full stack developer to programista, który ma za sobą już kilka lat aktywnej pracy w zawodzie. Nie ulega jednak wątpliwościom, że możliwość uczestniczenia w całym procesie oraz nieustanne zgłębianie wiedzy sprawia, że Twoje kompetencje nieustannie rosną i tworzą spójną całość. Gotową do wykorzystania w każdej sytuacji! A dzięki temu, że różne metody i techniki front- i back-endu mogą się przenikać, to Ty po prostu każdego dnia poszerzasz swoją znajomość całego stosu technologicznego.</p>\r\n<p><strong>3. Znajomość całego procesu</strong></p>\r\n<p>Ta umiejętność ma szczególne znaczenie dla zespołu, w którym będziesz pracować. Będziesz dla niego wsparciem, będziesz w stanie brać udział w różnych etapach całej pracy. Poza tym umiejętne poruszanie się w zakamarkach wszystkich etapów pracy sprawia, że Twoja praca – nawet jeśli aktualnie dotyczy jednego tylko fragmentu – jest bardziej precyzyjna i skuteczna. Wiesz i rozumiesz, co było wcześniej i do którego momentu dążycie w następnej kolejności.</p>\r\n<h2>Full stack developer – co mówią ogłoszenia o pracę?</h2>\r\n<p>Wciąż masz wątpliwości i nie do końca wiesz, czy bycie full stack developerem ma sens? W takim razie po prostu wejdź na stronę z ogłoszeniami o pracę, np. pracuj.pl, wpisz w wyszukiwarkę „full stack developer” i… obserwuj, jak dzieje się magia! Zobacz, jak wiele takich ogłoszeń się wyświetla. I to w całej Polsce – od Krakowa przez Warszawę po Gdańsk.</p>\r\n<p>W ten sposób zorientujesz się także, co firmy oferują przyszłym pracownikom, czego od nich oczekują i jak możesz przygotować się nie tylko do tego zawodu, ale i rozmów rekrutacyjnych. Ważne jest również to, że pojawiają się ogłoszenia dla wszystkich poziomów zaawansowania, czyli dla juniorów, midów i seniorów.</p>\r\n<p>Zwróć też uwagę, że duża część ogłoszeń na to stanowisko pojawia się w języku angielskim. To dla Ciebie istotna wskazówka. W pracy programisty – każdego programisty! – język obcy (najczęściej angielski) jest bardzo potrzebny, choćby do zrozumienia dokumentacji projektu.</p>\r\n<p>Przeczytaj także: <a href=\"https://coderslab.pl/pl/blog/bootcampy-programistyczne-najczesciej-powielane-mity\" target=\"_blank\" rel=\"noopener\">Bootcampy programistyczne – najczęściej powielane mity</a></p>\r\n<h2>Jakie organizacje potrzebują full-stack developerów?</h2>\r\n<p>Mówi się, że full stack programiści są najbardziej poszukiwani przez małe firmy czy start-upy. Chodzi więc o te instytucje, które mają mniejsze, ale wielozadaniowe zespoły. Często faktycznie tak właśnie jest, jednak – jeśli przejrzałeś wcześniej oferty pracy – to wiesz, że full stack developerów szukają m.in.:</p>\r\n<ul>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">firmy audytorsko-doradcze,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">banki,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">firmy telekomunikacyjne.</p>\r\n</li>\r\n</ul>\r\n<p>Jest zatem duże pole do popisu. Na programistów full stack czekają naprawdę rozmaite wyzwania. A dzięki tej różnorodności trudno o nudę w pracy!</p>\r\n<h2>Jak zostać full stack developerem?</h2>\r\n<p>Skoro jest tyle ofert, skoro tak wiele korzyści wiąże się z tą pracą, to co zrobić, żeby zostać full stack developerem?</p>\r\n<p>Ścieżek, które doprowadzą Cię do tego celu jest tak naprawdę wiele. Jednak jedna z nich zdarza się najczęściej. Ma ona miejsce wtedy, gdy dopiero wkraczasz w świat IT.</p>\r\n<p>W Coders Lab masz do wyboru kursy zarówno back-, jak i front-endowe. Wszystkie dostępne w różnych pakietach, formach i trybach. Dlatego na pewno znajdziesz rozwiązanie najbardziej pasujące do Twojego trybu życia.</p>\r\n<p>Jeśli dopiero zaczynasz przygodę z tą branżą, to przyjrzyj się pakietowi Premium. Został on przygotowany dla osób spragnionych bardzo szerokiej i praktycznej wiedzy zarówno z back-endu, jak i front-endu.</p>\r\n<p><strong>Jak to działa?</strong></p>\r\n<ol>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">Wybierasz swój kurs (np. <a href=\"https://coderslab.pl/pl/kurs/java-developer-web/o-kursie\" target=\"_blank\" rel=\"noopener\">Java Developer</a>).</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">Decydujesz się na pakiet Premium.</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">Po skończonym kursie korzystasz z programu <a href=\"https://coderslab.pl/pl/programy-wsparcia-kariery/full-stack\" target=\"_blank\" rel=\"noopener\">Full Stack</a>.</p>\r\n</li>\r\n</ol>\r\n<p>Dzięki temu niemal od razu zdobywasz wiedzę z obu kategorii. A co za tym idzie – zyskujesz przewagę na rynku pracy. Dodatkowo oszczędzasz pieniądze. Pakiet premium po prostu się opłaca!</p>\r\n<p>Nie wiesz, <a href=\"https://coderslab.pl/pl/najpopularniejszy-jezyk-programowania\" target=\"_blank\" rel=\"noopener\">jakiego języka programowania się uczyć</a>? Chętnie podpowiemy!</p>\r\n<h2>Full stack developer – praca i możliwe drogi rozwoju</h2>\r\n<p>Gdy zdobyte kompetencje i doświadczenie pozwolą Ci rekrutować na stanowisko programisty full stack, to pamiętaj, że na tym przygoda wcale nie musi się zakończyć.</p>\r\n<p>Ścieżka rozwoju nie musi kończyć się na poziomie seniora. W dalszej kolejności możesz starać się o stanowisko leadera lub managera zespołu. W ten sposób pomożesz ludziom doskonalić ich kompetencje i wykształcić nowe pokolenie sprawnych, doświadczonych full stack developerów!</p>\r\n<h2>Full stack developer – zarobki</h2>\r\n<p>Ulubiona i jednocześnie najczęstsza odpowiedź na tak postawione pytanie brzmi: to zależy.</p>\r\n<p>Wpływa na to kilka czynników, z których najważniejsze są:</p>\r\n<ul>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">staż pracy – na początku drogi, zwłaszcza gdy zupełnie nie masz jeszcze doświadczenia, zarobki będą oczywiście niższe,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">wielkość firmy – małe firmy, start-upy mogą oferować niższe stawki, ale dają za to okazję do wykazania się i rozwoju,</p>\r\n</li>\r\n<li dir=\"ltr\">\r\n<p dir=\"ltr\" role=\"presentation\">lokalizacja firmy – nikogo nie zdziwi, że stawki nawet na tym samym stanowisku w Warszawie, Krakowie, Gdańsku czy Łodzi będą się od siebie różnić, w końcu im większe miasto tym częściej wyższe stawki.</p>\r\n</li>\r\n</ul>\r\n<p>Przeciętne <strong>zarobki na stanowisku full stack programisty</strong> w Polsce sięgają około 11 500 zł brutto. Ale pamiętaj – to jedynie średnia. Kwota może więc zmieniać się w zależności od firmy, doświadczenia czy nawet formy zatrudnienia.</p>\r\n<h2>Programista full stack – podsumowanie</h2>\r\n<p>Magik w branży IT ma naprawdę ciekawe oblicze. Nic więc dziwnego, że tak wiele firm rozgląda się właśnie za takimi pracownikami. Jak widzisz, potencjalny full stack developer ma przed sobą wiele kierunków nie tylko tego, jak zrealizować zaplanowany cel zawodowy, ale i dalszego rozwoju kariery. Jeśli jesteś pewien, że odnajdziesz się zarówno w świecie baz, back-endu i front-endu, w takim razie śmiało podążaj tą dość długą, ale interesującą ścieżką.</p></p></div>', '2021-08-26'),
(4, 'Back-end – czym jest?', 'Specjaliści od back-endu są obecnie najbardziej poszukiwanymi pracownikami w branży IT. Wyjaśniamy zatem, czym zajmują się takie osoby, jakie powinny mieć umiejętności i na czym polegają działania back-endowe.', '<p class=\"article__description--content\">\r\n<h2>Co to jest back-end?</h2>\r\n<p>Można powiedzieć, że back-end to wszystko, czego nie widzą użytkownicy, a co jest potrzebne do działania serwisu internetowego lub aplikacji. Back-endem nazywamy to, co znajduje się na serwerze, a do czego użytkownik nie ma bezpośredniego dostępu. Back-end ukryty jest za front-endem (części aplikacji działającej po stronie użytkownika) i zarządza całym systemem danej aplikacji lub strony WWW. Bez tego kluczowego elementu prawidłowe działanie aplikacji nie byłoby możliwe. To właśnie tutaj obsługiwane są wszelkie dane przetwarzane w systemie danej aplikacji, wpisywane są do bazy danych, a potem są z niej odczytywane. Po odpowiednim przetworzeniu te dane są przekazywane za pomocą API do front-endu.</p>\r\n<h2>Na czym polegają działania back-endowe?</h2>\r\n<p>Bez wątpienia warto zajmować się back-endem. Dlaczego? Wystarczy spojrzeć na dane. Połowa użytkowników na najsłynniejszym portalu dla programistów na świecie, czyli <a href=\"https://insights.stackoverflow.com/survey/2019#technology\">Stack Overflow</a>, to właśnie specjaliści od back-endu. <strong>W Polsce pracodawcy z branży IT najczęściej poszukują back-endowców.</strong> 34,11% <a href=\"https://nofluffjobs.com/insights/raport-it-rynek-pracy-it-w-polsce-2019/\">wszystkich ogłoszeń w IT w 2019 roku</a> dotyczyło właśnie tych specjalistów. Dla porównania na drugim miejscu były ogłoszenia dla specjalistów fullstack – to 15,99% ogłoszeń. Jeśli chodzi o doświadczenie, pracodawcy przeważnie poszukują osób na poziomie Mid (51,39% ogłoszeń), a na drugim miejscu Seniorów (36,59%). Pojawiają się także ogłoszenia skierowane do Juniorów (12,02%).</p>\r\n<h2>Back-end developer – czym się zajmuje?</h2>\r\n<p>Back-endem zajmuje się back-end developer. Tworzy on wszelkie usługi w danej aplikacji, z których można korzystać poprzez API. Taki specjalista zajmuje się wewnętrzną warstwą aplikacji, ale oczywiście współpracuje z front-end developerem.&nbsp;</p>\r\n<p>Back-end developer pracuje nad różnymi funkcjonalnościami, niezbędnymi dla danej aplikacji – pisze kod (np. w języku <a href=\"https://coderslab.pl/pl/kurs/java-developer-web/o-kursie\">Java</a>), zapewnia odpowiednią wydajność i szybkość działania aplikacji. Nierzadko ten specjalista przygotowuje kluczowy element systemu, jak baza danych, korzystając przy tym z różnych silników (np. MySQL). Back-end developer może także wykonywać dodatkowe zadania, na przykład przygotowanie API, usuwanie błędów, integracja danych itp. Analizuje również statystyki i przygotowuje raporty na temat wybranych funkcjonalności serwera.&nbsp;</p>\r\n<h2>Umiejętności back-end developera</h2>\r\n<p><a href=\"https://nofluffjobs.com/insights/raport-it-rynek-pracy-it-w-polsce-2019/\">Analizując ogłoszenia</a> dotyczące rekrutacji back-end developerów, można zauważyć, że co trzeci pracodawca wymaga od takiego specjalisty znajomości języka Java. Oczekuje się również, że backendowcy będą znali SQL (24,48% ogłoszeń), REST (20,72%) i Spring (20,29%). Najrzadziej wymagana jest znajomość C++ (5,73%) i JavaScript (7,6%).&nbsp;</p>\r\n<p>W rzeczywistości dobry back-end developer powinien mieć dużo szersze umiejętności. Obok wspomnianego już języka Java, warto by bardzo dobrze znał jeszcze co najmniej jeden język programowania (np. PHP, <a href=\"https://coderslab.pl/pl/kurs/back-end-developer-python/o-kursie\">Python</a>) oraz był specjalistą od baz danych (np. MySQL, Oracle). Powinien również posiadać umiejętność zarządzania projektami oraz środowiskiem developerskim, testowym i produkcyjnym (warto poznać Dockera). Dobrze, aby back-end developer zdobył także doświadczenie z systemami kontroli wersji (szczególnie GIT), powinien przy tym rozumieć technologie występujące we front-endzie.&nbsp;</p>\r\n<h2>Kto powinien wybrać back-end?</h2>\r\n<p>Na koniec warto zastanowić się, dla kogo jest back-end. Na pewno dla osoby, która ma duże umiejętności programistyczne (można je nabyć także podczas kursów programowania). Trzeba poznać wiele trudnych technologii i frameworków. To powinna być osoba, której nie przeszkadza, że efekty jej pracy nie będą widoczne dla użytkowników. Dobry back-endowiec nie powinien bać się ciężkiej pracy i musi być cierpliwy, ponieważ efekty jego działań najczęściej nie są widoczne od razu, ale są ważną częścią aplikacji. To zawód dla tych osób, które od bycia na pierwszej linii bardziej cenią sobie samodzielne realizowanie projektów i czerpią z tego satysfakcję.&nbsp;</p>\r\n<p>Back-end to specjalizacja z przyszłością, co doskonale widać po licznych ogłoszeniach pracy dla takich programistów. Szukając zatem dla siebie odpowiedniego miejsca w branży IT, warto zastanowić się nad stanowiskiem back-end developera.</p></p></div>', '2021-08-25'),
(5, 'Najczęstsze mity o nauce programowania', 'Istnieje wiele mitów i przekonań na temat tego, kto może lub nie zostać programistą. Jednak większość z nich mija się z prawdą. Postanowiliśmy obalić najczęściej powtarzane przekonania dotyczące branży IT.', '<p class=\"article__description--content\"><p>Jednym z najczęściej spotykanych przez nas mitów jest:</p>\r\n<h2>#MIT: Jestem za stary na naukę programowania/testowania/UX Design</h2>\r\n<p>To nieprawda. Każdy wiek jest dobry, aby <a href=\"https://coderslab.pl/pl/artykul/czy-mozesz-nauczyc-sie-programowania-od-zera\">nauczyć się nowej umiejętności.</a> Zwłaszcza tej, która związana jest z tak przyszłościową branżą jak IT. Aby dostosować się do dynamicznych zmian, które zachodzą na całym świecie musimy zmienić myślenie o edukacji i nauce. Idea uczenia się przez całe życie jest niezwykle istotna i pomaga nam sprostać wyzwaniom współczesnego świata.</p>\r\n<p>Nasz najmłodszy absolwent miał 18 lat, a najstarszy - 58. Wiek nie gra tutaj żadnej roli. Liczy się chęć nauki i zaangażowanie. Jeśli myślisz więc, że jesteś już za stary, aby wejść do świata IT - to błąd. Co więcej, osoby, które posiadają już doświadczenie zawodowe są bardzo pożądane przez pracodawców. Dlaczego? Ponieważ taka osoba wie już jak radzić sobie w określonych sytuacjach.&nbsp;</p>\r\n<p>Drugim, zaraz po wieku, najczęściej powtarzanym mitem jest:</p>\r\n<h2>#MIT: Muszę skończyć studia informatyczne, by znaleźć pracę jako programista.</h2>\r\n<p>Nieprawda. W zeszłym roku przeprowadzono badanie na ogromnej grupie zawodowych programistów. Zapytano 71 800 developerów i okazało się, że tylko około połowa z nich to osoby po studiach informatycznych!</p>\r\n<p>Co więcej, ukończenie studiów informatycznych nie zapewnia wystarczającego przygotowania do pracy w zawodzie. Studia w dużej mierze skupiają się na wiedzy teoretycznej, również w IT. Dlatego konieczne są praktyki. Pracodawcy są tego świadomi i dlatego bardziej zwracają uwagę na portfolio i konkretne umiejętności kandydatów, niż na formalne wykształcenie.</p>\r\n<p>Większość naszych absolwentów przed kursami programowania nie miała wykształcenia technicznego, a dziś pracują już jako programiści.</p>\r\n<p>Rozprawiliśmy się już z największymi mitami powtarzanymi przez osoby, które chcą wejść do świata IT. Jaki jest kolejny z nich?</p>\r\n<h2>#MIT: Z moimi umiejętnościami nie mam szans nauczyć się programować.</h2>\r\n<p>Niekoniecznie. Wszystkie Twoje doświadczenia składają się na unikalny zestaw kompetencji, który w jakiś sposób może Ci się przydać w nowej branży. W swojej aktualnej pracy masz styczność na przykład z bardziej zaawansowanym Excelem? Będzie to pewne ułatwienie w nauce programowania od podstaw.&nbsp;</p>\r\n<p>A co, jeśli nie masz takich doświadczeń? Czy to przekreśla Twoje szanse? Absolutnie nie! Owszem, będziesz musiał zdobyć wiedzę z paru podstawowych zagadnień i nadrobić pewną wiedzę. Ale jeśli masz dostęp do dobrych materiałów - dostosowanych do osób początkujących - szybko Ci pójdzie.&nbsp;</p>\r\n<p><strong>Wśród naszych Absolwentów mamy osoby, które wykonywały przedtem bardzo zróżnicowane zawody.</strong> Na naszych kursach dla testerów oprogramowania, mieliśmy już filozofa, żołnierza, pracownika budowlanego, a nawet grabarza! Wiek, płeć i dotychczasowe doświadczenie zawodowe w żaden sposób nie decydują o tym, czy możesz programować.&nbsp;</p>\r\n<p>Najważniejszym czynnikiem jest Twoja motywacja i wytrwałość w nauce.&nbsp;</p>\r\n<p>Kolejnym mitem, z którym spotykamy się nadzwyczaj często jest:</p>\r\n<h2>#MIT: Wystarczy dyplom z uczelni/kursu aby odnaleźć się na rynku pracy</h2>\r\n<p>Ten mit z rzeczywistością ma niewiele wspólnego. Dyplom z uczelni lub ukończenia kursu wcale nie gwarantuje Ci pracy od ręki. Twój przyszły pracodawca będzie stawiał przede wszystkim na sprawdzenie Twoich umiejętności i znajomość praktycznych zagadnień. Dlatego tak istotną kwestią podczas nauki programowania/testowania czy UX Design jest tworzenie nowych projektów i ciągła nauka. Bez praktyki nie będziesz się rozwijać i pracodawcy nie będą aż tak chętni, aby zaproponować Ci pracę w swojej firmie. Twoja wiedza musi być praktyczna. Oczywiście, umiejętności teoretyczne też będą przydatne na Twojej drodze zawodowej, ale do innych i bardziej zaawansowanych rzeczy. Na samym początku liczą się umiejętności praktyczne.&nbsp;</p>\r\n<p>Jeśli chcesz wejść do świata IT, ponieważ myślisz, że dostaniesz od razu 10-15 tysięcy na rękę to niestety, ale musimy wyprowadzić Cię z tego błędu.&nbsp;</p>\r\n<h2>#MIT: Na starcie (czyli jako Junior) będę już zarabiać 10-15 tysięcy na rękę</h2>\r\n<p>To jeden z najczęściej powtarzanych mitów dotyczący branży IT. Niestety, ale tak jak w każdej branży w IT liczy się Twoje doświadczenie. Junior (w zależności od firmy) może liczyć na początkowe zarobki rzędu 2-4 tysięcy netto. Oczywiście wraz z Twoim doświadczeniem Twoje zarobki będą rosnąć proporcjonalnie. Plusem pracy w branży IT jest to, że bardzo szybko możesz podnieść swoje zarobki do wymarzonej kwoty. Wymaga to jednak od Ciebie ciągłej nauki, zaangażowania w projekty i rozwoju. Następuje to jednak znacznie szybciej niż w innych branżach!</p>\r\n<p>Rozwialiśmy Twoje wątpliwości dotyczące wiecznie powtarzanych przekonań na temat tego kto może zostać programistą i ile tak naprawdę zarabia się w IT? Mamy taką nadzieję. Branża IT jest niezwykle dynamiczną, stale rozwijającą się i przyszłościową. Jeśli chcesz spróbować swoich sił i zacząć przygodę z IT - sprawdź nasze kursy, które przygotują Cię do wejścia na rynek pracy.&nbsp;</p>\r\n<p><strong><a href=\"https://coderslab.pl/pl/kursy\">Kursy programowania, testerskie i UX Design</a></strong></p></p></div>', '2021-08-24'),
(6, 'Jak wybrać język programowania?', 'Dopiero zaczynasz swoją przygodę z IT? Przygotowaliśmy dla Ciebie informacje o podstawowych językach programowania, które powinny ułatwić Ci wybór odpowiedniego dla Ciebie.', '<p class=\"article__description--content\"><h2 style=\"text-align: left;\">Nauka programowania, a popularność technologii</h2>\r\n<p style=\"text-align: left;\">Zacznijmy od popularności języków programowania, ponieważ jest ona istotna z dwóch powodów - pożądania na rynku pracy oraz dostępności materiałów do nauki. Najbardziej popularnym językiem programowania w 2019 jest <a href=\"https://coderslab.pl/pl/kurs/javascript-developer-react/o-kursie\">JavaScript.</a> Według raportu Bulldogjob z \"Badania branży IT w Polsce w 2019\" znajomość tej technologii deklaruje aż 68 % badanych.&nbsp; Na drugim miejscu plasuje się <a href=\"https://coderslab.pl/pl/kurs/java-developer-web/o-kursie\">Java.</a>&nbsp;</p>\r\n<h2 style=\"text-align: left;\">JavaScript - dla kogo?</h2>\r\n<p style=\"text-align: left;\"><a href=\"https://coderslab.pl/pl/kurs/javascript-developer-react/o-kursie\">JavaScript</a> jest dla osób, które lubią szybko widzieć efekty swojej pracy oraz takich, które lubią ciągle się uczyć. Technologie front-endowe bardzo szybko się zmieniają, więc osoby, które chcą zacząć programować w JavaScript muszą lubić się rozwijać. Jest to język łatwy do rozpoczęcia nauki programowania, ponieważ do pisania kodu wystarczy Ci tylko notatnik i przeglądarka. Dla początkujących problemem może być to, że ten sam kod może działać inaczej w różnych przeglądarkach. Tak jak wynika z raportu Bulldogjob JavaScript jest jednym z najpopularniejszych ostatnio języków programowania. Przekłada się to na dostępność artykułów, pomocy i tutoriali w sieci. JavaScript to zdecydowanie “must know” jeżeli chodzi o programowanie webowe. Technologia ta pozwala również szybko przeprofilować się na back-end poznając Node.js czy tworzenie aplikacji mobilnych poznając React Native. Ze względu na swoją popularność JavaScript jest obecnie mocno pożądaną technologią na rynku pracy.&nbsp;</p>\r\n<h2 style=\"text-align: left;\">Kto powinien uczyć się Javy?</h2>\r\n<p style=\"text-align: left;\">Dla osób, które chcą pracować przy korporacyjnych projektach z dużą ilością zależności i logiki biznesowej. Javę stosuje się do pisania wszelkiego rodzaju aplikacji, od małych po ogromne. Często wykorzystywana jest także w systemach bankowych. Może być także używana w systemach wbudowanych dzięki Oracle Java Embedded. Typowymi przykładami są karty SIM, odtwarzacze dysków Blu-ray czy urządzenia do monitorowania stanu zdrowia. Nie jest to język używany do tworzenia prostych stron wizytówek. Technologia ta jest rozwijana od wielu lat i posiada świetną dokumentację oraz szeroką społeczność użytkowników. <a href=\"https://coderslab.pl/pl/kurs/java-developer-web/o-kursie\">Java</a> jest językiem programowania ogólnego zastosowania, dzięki czemu znajduje się w czołówce najbardziej popularnych technologii na rynku. W Javie został napisany Minecraft, wiele popularnych aplikacji takich jak Gmail czy OpenOffice oraz takie strony jak LinkedIn, Amazon czy chociażby Netflix.</p>\r\n<h2 style=\"text-align: left;\">Python - najbardziej pożądany język do nauki</h2>\r\n<p style=\"text-align: left;\">Według raportu StackOverflow z 2018 roku Python jest najbardziej pożądanym językiem wśród programistów. Oznacza to, że programiści nie znający tego języka wskazują go jako ten, którego chcieliby się nauczyć.&nbsp;</p>\r\n<p style=\"text-align: left;\"><a href=\"https://coderslab.pl/pl/kurs/back-end-developer-python/o-kursie\">Python</a> jest zarówno dla osób, które wcześniej nie programowały oraz dla tych, którzy niekoniecznie chcą zmienić zawód, ale wykorzystać nowe umiejętności w swojej pracy. Będzie on idealny także dla tych, którzy planują zajęcie się innymi dziedzinami informatyki, takimi jak machine learning czy big data - tam używa się głównie Pythona. Python jest językiem łatwym do nauki i można go uruchomić w każdym systemie operacyjnym. Używany jest w rozwoju aplikacji webowych, naukowych, machine learning, big data i wielu innych. Jego zwięzłość i prostota czyni go niemal idealnym językiem w wielu zastosowaniach. Jakie aplikacje powstały w Pythonie? Bez tej technologii nie byłoby dziś Instagramu! Zanim Instagram został wykupiony przez Facebooka była to prosta strona internetowa zbudowana na Django - frameworku, który został napisany w Pythonie pod koniec 2003 roku.&nbsp;</p>\r\n<h2 style=\"text-align: left;\">PHP - łatwy do nauki</h2>\r\n<p style=\"text-align: left;\">Dla osób, które lubią zagadki logiczne, dokładnie analizują problemy i są systematyczne. Jest to język wykorzystywany do tworzenia aplikacji webowych.&nbsp; <a href=\"https://coderslab.pl/pl/kurs/back-end-developer-php/o-kursie\">PHP</a> jest łatwy do rozpoczęcia nauki programowania, ale oferuje też zaawansowane możliwości dla doświadczonych profesjonalistów. Technologia ta rozwija się dynamicznie, dzięki czemu z łatwością można znaleźć materiały do nauki czy porady dotyczące rozwiązywania napotkanych podczas nauki problemów.&nbsp; Jest to najpopularniejszy język w tworzeniu stron internetowych. Używa go 80% z 10 milionów stron, co oznacza, że nie zostanie on łatwo zastąpiony. Przykładem firm, które wykorzystują PHP są Facebook, WordPress, Flickr, WhatsApp, Tesla i IBM.</p>\r\n<h2 style=\"text-align: left;\">Zaplanuj swój rozwój w IT</h2>\r\n<p style=\"text-align: left;\">Przed wyborem języka programowania powinniśmy przede wszystkim pomyśleć o tym, do czego chcielibyśmy wykorzystać nasze umiejętności. Czy interesuje nas tworzenie stron internetowych, aplikacji mobilnych, a może zaawansowanych systemów bankowych. Co chcielibyśmy robić najbardziej? Odpowiedzenie sobie na to pytanie pozwoli nam dobrać technologię, która sprosta naszym oczekiwaniom i będzie odpowiednia względem naszych dalszych planów. Jeżeli jeszcze nie mamy dokładnie sprecyzowanych planów, najlepiej wybrać technologię, która ma szerokie zastosowanie oraz jest dosyć popularna na rynku pracy. Chcesz wiedzieć więcej o nauce i kursach programowania zajrzyj do nas na stronę poświęconą tej tematyce.</p></p></div>', '2021-08-23'),
(7, 'Książki do nauki programowania', 'Samodzielna nauka programowania może być wyzwaniem, ilość dostępnych książek może być przytłaczająca. Przedstawiamy zestawienie wybranych książek, które uzupełnią Twoją wiedzę i ułatwią sukces w branży IT.', '<p class=\"article__description--content\"><p>Miłej lektury!&nbsp;</p>\r\n<ul>\r\n<li><a href=\"https://www.empik.com/kariera-programisty-jak-budowac-doswiadczenie-przejsc-rekrutacje-i-zdobyc-prace-marzen-sonmez-john,p1201490319,ksiazka-p?gclid=EAIaIQobChMI1IWCmPrW4QIVGYGyCh32rQtEEAQYASABEgIvYvD_BwE&amp;gclsrc=aw.ds&amp;fbclid=IwAR069LFXqKND6UjOhsjqKMuCMD17QHF3bRb-T6A_TIgEAOKQs_ERYzvvsLY\">Kariera programisty. Jak budować doświadczenie, przejść rekrutację i zdobyć pracę marzeń (John Sonmez)</a> - dzięki tej książce pewnie wejdziesz w branżę tworzenia oprogramowania. Znajdziesz tu mnóstwo przydatnych informacji o specyfice pracy dewelopera. Autor to&nbsp; programista i konsultant specjalizujący się w automatyzacji testów i metodyce Agile. Spektakularne sukcesy zawodowe zaczął odnosić dopiero wtedy, gdy zrozumiał, że wybitna wiedza o tym, jak rozwijać oprogramowanie, to za mało, by stać się świetnym programistą.&nbsp;&nbsp;</li>\r\n<li><a href=\"https://ebookpoint.pl/ksiazki/czysty-kod-podrecznik-dobrego-programisty-robert-c-martin,czykov.htm?fbclid=IwAR3JxTQW0TycGsym7YxQC1xbXNs2qbIRp9_HBH14NgFZsomnnQI6_lr44vU\">Czysty kod. Podręcznik dobrego programisty (Robert C. Martin)</a> - w książce&nbsp; szczegółowo omówione zostały zasady, wzorce i najlepsze praktyki pisania czystego kodu. Podręcznik zawiera także kilka analiz przypadków o coraz większej złożoności, z których każda jest doskonałym ćwiczeniem porządkowania zanieczyszczonego bądź nieudanego kodu.</li>\r\n<li><a href=\"https://ebookpoint.pl/ksiazki/mistrz-czystego-kodu-kodeks-postepowania-profesjonalnych-programistow-robert-c-martin,mckkov.htm?from=ni#format/e\">Mistrz czystego kodu. Kodeks postępowania profesjonalnych programistów (ebook) (Robert C. Martin)</a>-&nbsp; znany jako Uncle Bob, to jeden z prawdziwych gwiazdorów branży IT, człowiek o niezwykłej charyzmie, rewelacyjnym podejściu do słuchaczy i poczuciu humoru. O jego czas wciąż biją się konferencje branżowe. W trakcie lektury dowiesz się, jakie cechy charakteryzują profesjonalnego programistę, a jest ich sporo!</li>\r\n<li><a href=\"https://lubimyczytac.pl/ksiazka/169696/geek-w-swiecie-korporacji-podrecznik-kariery-programisty?fbclid=IwAR2CdJ2L-fPZHV_SXb1pmgA7pE9O0zTJ48uPqvHg3pZ8DtQe61NPkayPNzw\">Geek w świecie korporacji. Podręcznik kariery programisty (Michael Lopp)</a> - w umyśle geeka świat jest jak komputer - możliwy do zrozumienia i poznania oraz skończony. Życie jak każdy system da się opanować, wymaga to tylko odpowiedniej ilości czasu i wysiłku. Można zgłębić jego budowę i zrozumieć obowiązujące w nim reguły, a także otrzymać odpowiedź, co i jak należy robić, żeby odnieść pożądany sukces.</li>\r\n<li><a href=\"https://www.nieprzeczytane.pl/The-Non-Technical-Guide-to-Web-Technologies%2Cproduct1021199.html?fbclid=IwAR0EW8Hc1S2GKzk6BidloKOIu0yeXTXoXGnMehOXvUJhZC0vLbeXQX31xDw\">The Non-Technical Guide to Web Technologies (Tommy Chheng)</a></li>\r\n<li><a href=\"https://zawodprogramista.pl/?fbclid=IwAR1eOSLD1F7iglNUtsUuNkVQKu8jSvB8LJwuD6ongM5a6MB4k1PF_BsMFXA#zawod-programista\">Zawód: Programista. Podręcznik udanej kariery (Maciej Aniserowicz)</a> - książka ta poświęcona jest, jak sama nazwa wskazuje, zawodowi programisty, na każdym etapie rozwoju. Autor jest programistą z kilkunastoletnim stażem. Pracował dla korpo, startupu, software house\'u. Pracował zdalnie i w biurze. Dla klientów z Polski i z zagranicy. Tworzył wielkie systemy i małe aplikacyjki. Ma programistyczne DNA.Od dekady udziela się w polskich społecznościach programistycznych, budując \"imperium devstyle\". Prowadzi blog devstyle.pl i vlog na YouTube. Jest gospodarzem podcasta DevTalk.</li>\r\n<li><a href=\"https://ebookpoint.pl/ksiazki/english-4-it-praktyczny-kurs-jezyka-angielskiego-dla-specjalistow-it-i-nie-tylko-beata-blaszczyk,anginf.htm?fbclid=IwAR3j2JplAo8dE1MEqeBnM7adaZDGmrHIBxL7IjRQKzucUlElooQOdwX-sSM#format/e\">English 4 IT. Praktyczny kurs języka angielskiego dla specjalistów IT i nie tylko (Beata Błaszczyk)</a> - obecnie język angielski jest nieodłącznym elementem świata IT. Większość producentów oprogramowania oraz twórców metodyk i standardów w branży IT udostępnia materiały wyłącznie w tym języku. Ponadto, wiele projektów informatycznych jest realizowanych we współpracy z ekspertami pochodzącymi z różnych krajów. W książce znajdziesz profesjonalne angielskie teksty dotyczące różnych obszarów IT: baz danych, big data, sieci komputerowych, metod wytwarzania oprogramowania i wielu innych. Każdy z nich został opatrzony słowniczkiem zawierającym tłumaczenia na język polski zarówno terminów specjalistycznych, jak i tych z języka ogólnego. Ponadto w każdym rozdziale omówione zostały różne zagadnienia gramatyczne wraz z przykładami ich zastosowania w języku informatyki. Na końcu każdego rozdziału znajdziesz ćwiczenia, które pomogą Ci utrwalić poznane słownictwo i reguły gramatyczne.</li>\r\n</ul></p></div>', '2021-08-22'),
(8, 'Czy juniorzy mogą liczyć na pracę w dobie kryzysu?', 'Specjaliści IT nigdy nie mogli narzekać na brak zainteresowania ze strony pracodawców. W ubiegłym roku aż 15% wszystkich ofert dostępnych na portalu Pracuj.pl było skierowanych właśnie do nich. A jak się sprawy mają u mniej doświadczonych programistów?', '<p class=\"article__description--content\"><p>Oczywiście, sytuacja na rynku pracy ulega dziś gwałtownym zmianom, w miarę jak koronawirus pustoszy kolejne branże. Jak jednak wynika z raportu Devire, firmy IT należą do tych, które pandemii opierają się najskuteczniej i w których zatrudnieni nie mają na razie wielkich powodów do obaw.</p>\r\n<p>O tym, że programiści mogą dziś raczej spać spokojnie, przekonują też dane portalu rekrutacyjnego No Fluff Jobs. Wynika z nich, że mediana wynagrodzeń „koderów” pozostała w marcu na niezmienionym poziomie (14,8 tys. netto) - a był to przecież pierwszy miesiąc, którego większą część spędziliśmy w warunkach kwarantanny.</p>\r\n<h2>Jak zacząć pracę w branży IT?</h2>\r\n<p>Nic zatem dziwnego, że wiele spośród osób, które z powodu pandemii straciły pracę bądź część wynagrodzenia, spogląda dziś na programistów i innych specjalistów z branży IT zazdrosnym wzrokiem. Sektor ten po raz kolejny okazuje się gospodarczym bastionem. Czy jest szansa by dostać się za jego mur i samemu stać się cyfrowym specjalistą? I czy w ogóle jest to możliwe, gdy wcześniej nie mieliśmy z programowaniem do czynienia?&nbsp;</p>\r\n<p>Zdaniem Jacka Tchórzewskiego, programisty i współzałożyciela Coders Lab Szkoły IT, w najbliższych miesiącach umiejętności cyfrowe pozostaną w cenie, niezależnie od kwalifikacji i doświadczenia.</p>\r\n<p>- <em>Obecna sytuacja obnażyła brak gotowości wielu firm do funkcjonowania w sferze online. Część przedsiębiorców dopiero w warunkach kwarantanny przekonała się, jak ważny jest aspekt “cyfrowego” funkcjonowania ich firm. Dotyczy to niemal każdej obszaru działania - od sprawnej i atrakcyjnej strony www, przez digital marketing, po świadczenie usług i komunikację z klientem online</em> – tłumaczy Jacek Tchórzewski. – <em>Weźmy na przykład firmy z branży handlowej, które do tej pory opierały się na tradycyjnej sprzedaży. Nagle okazało się, że stoją one przed koniecznością stworzenia sklepów internetowych – inaczej grozi im całkowita utrata przychodów. Takie narzędzie jest w stanie przygotować junior software developer. Spodziewam się, że zamówień na nieskomplikowane systemy, aplikacje czy strony www w najbliższych miesiącach nie zabraknie. To z kolei oznacza dużo pracy dla programistów, również tych o niewielkim doświadczeniu.</em></p>\r\n<p>Jak podaje No Fluff Jobs, w marcu wynagrodzenie juniorów zatrudnionych na kontraktach wyniosło 6,5 tys. zł i było o 1 proc. wyższe niż w styczniu. Programistów szczególnie aktywnie rekrutowały firmy software i fintech, a także producenci narzędzi online i oprogramowania e-commerce. Na mniejszą skalę osób z umiejętnościami cyfrowymi szukały natomiast banki i firmy konsultingowe.</p>\r\n<p>- <em>Niewykluczone też, że juniorzy będą poszukiwani na rynku jako alternatywa dla outsourcingu usług informatycznych</em> – mówi Jacek Tchórzewski. – <em>W przypadku, gdy firma ma „na pokładzie” doświadczonego programistę, może uznać za bardziej efektywne zatrudnienie juniorów i stworzenie wewnętrznego zespołu do realizacji projektów technologicznych niż zakup takich usług z zewnątrz.</em></p>\r\n<h2>Jak zostać Juniorem w branży IT?</h2>\r\n<p>Czy zatem jest sposób, by wkroczyć na ścieżkę zawodową programisty bez wcześniejszego przygotowania w postaci wieloletniej nauki na studiach? Dla wszystkich zadających sobie to pytanie mamy dobra wiadomość: jest. W <a href=\"https://coderslab.pl/pl\">Coders Lab</a> wystarczą dwa miesiące nauki, by zdobyć umiejętności niezbędne do rozpoczęcia kariery w branży IT.</p>\r\n<p>- <em>Kiedy zaczynaliśmy 7 lat temu, byliśmy jedyną szkołą programowania w Polsce. Dzięki wprowadzeniu modelu nauki opartego na amerykańskim systemie edukacji, czyli bootcampach zmieniliśmy oblicze polskiego rynku edukacji IT. Dzięki intensywnym kursom uczestnicy zdobywają praktyczną wiedzę, pracując na realnych projektach. Dzięki temu każdy kursant gromadzi cenne doświadczenia odpowiadające na potrzeby rynku IT, będąc tym samym przygotowanym do rozpoczęcia swojej pierwszej pracy w branży, tuż po ukończeniu kursu</em> - opowiada Marcin Tchórzewski, założyciel największej polskiej szkoły IT Coders Lab.</p>\r\n<p><a href=\"https://coderslab.pl/pl\">Kursy w Coders Lab</a> w zależności od trybu trwają od 2 tygodni do kilku miesięcy i są idealnym rozwiązaniem dla osób, które wcześniej nie miały styczności z kodowaniem.</p>\r\n<p>- <em>W Coders Lab uczymy programowania, testowania oprogramowania i UX design od podstaw. Na nasze kursy przychodzą osoby, które wcześniej nie miały nic wspólnego ze światem IT, a po ukończeniu nauki zdobywają swoje pierwsze zlecenia w branży. Nasi absolwenci pracują obecnie w takich firmach jak Google, Samsung, Santander, EY czy Daftcode, a ich pracodawcy dają nam bardzo pozytywny feedback na temat ich umiejętności</em> - mówi Marcin Tchórzewski, Coders Lab.</p>\r\n<p>&nbsp;</p></p></div>', '2021-08-21');
```


<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Start the container

    docker-compose up -d
    
You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](http://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2basic_test` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
