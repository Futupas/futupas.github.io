<?php
    require_once('get_lang.php');

    $cnt_title = array(
        'cs' => 'Alex Panov: můj životopis',
        'en' => 'Oleksandr Panov: my CV',
        'ru' => 'Александр Панов: моё резюме',
        'uk' => 'Олександр Панов: моє резюме',
    )[$LANG];

    $cnt_header = array(
        'cs' => 'Alex Panov',
        'en' => 'Oleksandr Panov',
        'ru' => 'Александр Панов',
        'uk' => 'Олександр Панов',
    )[$LANG];

    $cnt_first_paragraph = array(
        'cs' => 'Narodil jsem se v roce 2002 v Poltavě, většinu života jsem bydlel v Kyjevě. Teď bydlím v Trutnově (Ceská Republika). Od 7. třídy se zabývám programováním. Od 10. třídy jsem začal pracovat v IT. Maturoval jsem na matematicko-fyzikální škole s vyznamenáním (se zlatou medailí). Zúčastňoval jsem se krajských a městských olympiád z matematiky, fyzíky a programování, ve kterých jsem obsazoval první místa. 2 roky jsem studoval obor Softwarové inženýrství na Kyjevsko-mohyljanské akademii. Mám zkušenosti s vývojem komerčního softwaru (4 roky). Účastnil jsem se studentského startupu jako programátor. Hlavní zásobník (stack): .NET (C#) + JavaScript. Většinou jsem vytvářel webové aplikace a telegram-boty. Umím ukrajinsky a rusky (mateřské jazyky). Odborná angličtina- výborně. Hovorová angličtina – velmi dobře. Čeština – na úrovni B2.',
        'en' => 'I was born in Poltava in 2002, most time of life has been living in Kyiv. Now, I live in Trutnov (Czech Republic). Since 7th form I have been writing computer programs. In the 10th form I started working in the IT industry. I finished physics and mathematics high school summa cum laude. I won a few prizes in mathematics, physics and programming at Regional and City Academic Olympic.  Then, for two years I studied at Kyiv-Mohyla Academy majoring in software engineering. During my studies I participated as a programmer in a few student startups.  Overall, I have got 4 years’ worth of experience in commercial software development. My main stack is .NET (C#) + JavaScript. Most of all I worked on web-applications and telegram-bots (Telegram is a popular messenger, on the verge of becoming a social network). I speak Russian and Ukrainian as native tongues, I can read formal documents, specialty manuals and instruction in English at advanced level, though my speaking lags behind for the lack of practice, my Czech is pretty good, at B2 level.',
        'ru' => 'Я родился в 2002 году в Полтаве, бóльшую часть жизни провёл в Киеве. Сейчас проживаю в Трутнове (Чешская Республика). С 7 класса занимаюсь программированием. С 10 класса начал работать в сфере ИТ. Закончил физико-математическую школу с золотой медалью. Занимал призовые места на районных и городских олимпиадах по математике, физике и программированию. Два года проучился в Киево-Могилянской Академии на специальности "Инженерия Программного Обеспечения". Опыт коммерческой разработки – 4 года. Участвовал в студенческих стартапах как программист. Основной стек – .NET (C#) + JavaScript. В основном писал веб-приложения и телеграм-ботов. В совершенстве владею русским и украинским языками; уровень владения английским языком: чтение и анализ документации – высокий, разговорный – выше среднего; уровень владения чешским языком – B2.',
        'uk' => 'Я народився у 2002 році в Полтаві, більшу частину життя провів у Києві. На даний момент проживаю в Трутнові (Чеська Республіка). З 7 класу займаюсь програмуванням. З 10 класу розпочав працювати в IT-індустрії. Закінчив фізико-математичну школу з золотою медаллю, брав участь та займав призові місця в районних і міських олімпіадах з математики, фізики та програмування. Протягом 2 років навчався в Києво-Могилянській Академії за освітньою програмою "Інженерія програмного забезпечення", упродовж навчання брав участь у студентських стартапах для програмістів. Досвід комерційної розробки програм — 4 роки. Основний стек — .NET (C#) + JavaScript. Переважно займався розробкою веб-застосунків і телеграм-ботів. Вільно володію російською та українською мовами; рівень володіння англійською мовою: читання та аналіз документації — високий, розмовна мова — вище середнього; рівень володіння чеською мовою — B2.',
    )[$LANG];
    
    $cnt_knowledge_and_experience_header = array(
        'cs' => 'Znalosti a praxe:',
        'en' => 'Skills and experience:',
        'ru' => 'Знания и опыт:',
        'uk' => 'Навички та досвід роботи:',
    )[$LANG];
    
    $cnt_knowledge_and_experience_items = array(
        'cs' => array(
            '.NET/C# – znalosti výborné, zkušenost – 4 roky.',
            'JavaScript, TypeScript – velmi dobře ovládám, zkušenost – 4 roky. NodeJS, jQuery – dobře ovládám.',
            'Vue2/NuxtJS – znalosti průměrné, zkušenost – půl roku.',
            'Java – znalosti nadprůměrné, studoval jsem na univerzitě.',
            'C++ – znalosti nadprůměrné, studoval jsem na univerzitě.',
            'VB/VBS – mohu číst kód, ovládám velmi málo.',
            'Pascal/Delphi – můj první jazyk, málo ho ovládám.',
            'HTML/CSS – znalosti nadprůměrné.',
            'PHP – znalosti průměrné.',
            'Zásady OOP, čistého kódu a dokumentování – výborné.',
            'Práce s UNIX-systémy – znalosti průměrné, programoval jsem pro Linux, nastavoval jsem prostředí a vypracovával jsem projekty.',
            'Databáze: SQL Server, MySQL, PostgreSQL, SQLite, MongoDB: pracoval jsem skoro se všemi, znalosti dobré.',
        ),
        'en' => array(
            '.NET/C# – Highly skilled, working experience for 4 years;',
            'JavaScript, TypeScript – Highly skilled, working experience for 4 years. I am as well pretty skilled at NodeJS, jQuery;',
            'Vue2/NuxtJS – Average level, experience – half a year;',
            'Java – I studied it at the University, average skill;',
            'C++ – I studied it at the University, average skill;',
            'VB/VBS – I can read the code, basic skills;',
            'Pascal/Delphi – Though it was my first programming language, my skills in it are basic;',
            'HTML/CSS – Above average skills;',
            'PHP – At an average level;',
            'OOP principles, clean code and documenting – High level skills and experience;',
            'Experience with UNIX-systems – My skills in it are about average, though I did some developing work for Linux, set up the environment, deployed projects;',
            'Databases – SQL Server, MySQL, PostgreSQL, SQLite, MongoDB: Though I have experience working with almost all these programs, my skills in them are about average.',
        ),
        'ru' => array(
            '.NET/C# – знания высокие, опыт работы – 4 года;',
            'JavaScript, TypeScript – знания высокие, опыт работы – 4 года. Знаю на достаточном уровне NodeJS, jQuery;',
            'Vue2/NuxtJS – Средние знания, опыт – полгода;',
            'Java – знания выше среднего, учил в университете;',
            'C++ – знания средние, учил в университете;',
            'VB/VBS – могу читать код, знаю плохо;',
            'Pascal/Delphi – с него начинал, знаю плохо;',
            'HTML/CSS – знания выше среднего;',
            'PHP – знания средние;',
            'Принципы ООП, чистого кода и документирования – высокие;',
            'Работа с UNIX-системами – знания средние, занимался разработкой под Linux, настройкой среды и развертыванием проектов;',
            'Базы данных – SQL Server, MySQL, PostgreSQL, SQLite, MongoDB: работал почти со всем, чем можно, знания средние.',
        ),
        'uk' => array(
            '.NET/C# — високий рівень знань; досвід роботи — 4 роки;',
            'JavaScript, TypeScript — високий рівень знань; досвід роботи — 4 роки. Маю достатній рівень знань програм NodeJS, jQuery;',
            'Vue2/NuxtJS – Середній рівень, досвід – півроку;',
            'Java — знання на рівні вище середнього, вивчав цю програму під час навчання в університеті;',
            'C++ — знання на рівні вище середнього, вивчав цю програму під час навчання в університеті;',
            'VB/VBS — здатний читати код, але навички володіння програмою на низькому рівні;',
            'Pascal/Delphi — мови, з яких розпочинав свою роботу; рівень володіння — низький;',
            'HTML/CSS — знання на рівні вище середнього;',
            'PHP — середній рівень знань;',
            'Принципи ООП, чистого коду й документування — високий рівень знань;',
            'Робота з UNIX-системами — середній рівень знань, займався розробкою під Linux, налаштуванням середовища й розгортанням проєктів;',
            'Бази даних — SQL Server, MySQL, PostgreSQL, SQLite, MongoDB: маю досвід роботи майже з усіма існуючими базами; рівень володіння — середній.',
        ),
    )[$LANG];
    
    $cnt_jobs_and_portfolio_header = array(
        'cs' => 'Práce a portfolio:',
        'en' => 'Jobs and portfolio:',
        'ru' => 'Работы и портфолио:',
        'uk' => 'Мої роботи та портфоліо:',
    )[$LANG];
    
    $cnt_jobs_and_portfolio_items = array(
        'cs' => array(
            '2 roky jsem se podílel na vypracování systému dálkového ovládání pro kontrolery v RELSiS.',
            'Vytvořil jsem 2 komerční telegram-boty pro studentské startupy (<a href="https://t.me/reshalybot">@reshalybot</a>, <a href="https://t.me/TupaUmnikBot">@TupaUmnikBot</a>).',
            'Vypracoval jsem studentský online-průzkum v rámci volební kampaně při volbě Prezidenta Kyjevsko-mohyljanské akademii (NaUKMA).',
            'Vytvořil jsem knihovnu EmmetToHTML (JavaScript).',
            'Vytvořill jsem knihovnu pro jednoduchou tvorbu HTTP-serveru na C#.',
            'Založil jsem <a href="https://rgb128.github.io">kreativní sdružení "Šedost"</a>.',
            'Vic, než rok pracuji jako programátor v velké ukrajinské firmně, kterou nemůžu nazvát kvůli NDA.',
            'Skoro rok jsem podporoval udržoval monitorovací systém solární stanice.',
            'Zároveň jsem pracoval na častečných úvazcích ještě v dalších zaměstnáních. Zabývám se i mnoha dalšími menšími projekty.',
            '<a href="https://github.com/Futupas">github.com/Futupas</a> – místo tisíce slov.',
        ),
        'en' => array(
            'I worked on developing system of remote control of microcontrollers in RELSiS for 2 years;',
            'Wrote 2 commercial telegram-bots for student startups (<a href="https://t.me/reshalybot">@reshalybot</a>, <a href="https://t.me/TupaUmnikBot">@TupaUmnikBot</a>);',
            'Developed a student survey for President of the university election;',
            'Created library EmmetToHTML (JavaScript);',
            'Created library for easy creation of HTTP-server in C#;',
            'Created <a href="https://rgb128.github.io">creative association "Gray"</a>, and I have been creating interactive arts ever since',
            'Have been working for more than year at very big ukrainian company, that I can\'t name because of NDA;',
            'Almost a year was have been supporting a monitoring system for solar stations;',
            'Besides, I did some part-time jobs, participated in dozens of small projects;',
            '<a href="https://github.com/Futupas">github.com/Futupas</a> — instead of a thousand words.',
        ),
        'ru' => array(
            '2 года разрабатывал систему удаленного управления контроллерами в компании RELSiS;',
            'Написал 2 коммерческих телеграм-бота для студенческих стартапов (<a href="https://t.me/reshalybot">@reshalybot</a>, <a href="https://t.me/TupaUmnikBot">@TupaUmnikBot</a>).',
            'Разрабатывал студенческий онлайн-опрос для выборов Президента НаУКМА;',
            'Написал библиотеку EmmetToHTML (JavaScript);',
            'Написал библиотеку для простого создания HTTP-сервера на C#;',
            'Создал <a href="https://rgb128.github.io">творческое объединение "Серость"</a>, создавал интерактивное искусство;',
            'Год работал (и сейчас работаю) программистом в крупной украинской фирме, которую не могу назвать из-за NDA;',
            'Почти год поддерживал систему мониторинга солнечных станций;',
            'Работал ещё в нескольких работах на неполной ставке, участвовал в создании и создал ещё десятки небольших проектов;',
            '<a href="https://github.com/Futupas">github.com/Futupas</a> – вместо тысячи слов.',
        ),
        'uk' => array(
            'Протягом 2 років займався розробкою системи віддаленого керування контролерами в компанії RELSiS;',
            'Написав 2 комерційних телеграм-боти для студентських стартапів (<a href="https://t.me/reshalybot">@reshalybot</a>, <a href="https://t.me/TupaUmnikBot">@TupaUmnikBot</a>);',
            'Займався розробкою студентського онлайн-опитування для виборів Президента НаУКМА;',
            'Написав бібліотеку EmmetToHTML (JavaScript);',
            'Написав бібліотеку для простого створення HTTP-сервера на C#;',
            'Створив <a href="https://rgb128.github.io">творче об\'єднання "Сірість"</a>, займався створенням інтерактивного мистецтва;',
            'Протягом більше року працюю програмістом в великій українській компанії, яку не можу назвати через NDA;',
            'Майже рік підтримував систему моніторинга сонячних станцій;',
            'Маю невеликий досвід роботи в інших компаніях, брав участь у створенні багатьох невеликих проєктів;',
            '<a href="https://github.com/Futupas">github.com/Futupas</a> – замість тисячі слів.',
        ),
    )[$LANG];
    
    $cnt_last_paragraph = array(
        'cs' => 'Stručně о sobě: jsem samostání a ambiciózní. Mám rád programování a kreativní moderní úmění (úmění budoucnosti). Rychle se učím, rád ovládám nové technologie. Mám rád nestandardní přístupy. Jsem společensky založený člověk, introvert. Jsem bohužel kuřák. Miluju čaj, piju ho víc, než vodu. Kávu nepiju. Rád hraju na kytaru, i když jsem v hudební škole vystudoval obor Klavír. Když mám inspiraci, kreslím na papíru grafiti. V hudbě preferuji rock, zvláště ruský rock. Nemůžu vystát zimu. Mám rád pořádek, i když jej chápu poněkud jinak. Miluju tmavá témata a bílé kalhoty..',
        'en' => 'A few words about myself: I am self-reliant and ambitious. I am a quick learner, and I like learning new technologies. I am flexible and daring, I like non-standard approaches. I am outgoing and sociable, though some of my colleagues peg me as an introvert. Bad habits: I smoke. I do not drink coffee, I love tea, and I drink it in huge quantities.  As a hobby I graduated from a school of music, though majoring in the piano, I play the guitar.  I like rock music, especially Russian rock. When I am in the mood or hit with an inspiration, I draw graffiti (though only in albums). I love dark themes and white pants. Although I love order in everything, my take on it understand may be somewhat unconventional. I cannot stand the cold.',
        'ru' => 'Немного о себе: обожаю программирование и искусство будущего. Быстро учусь. Люблю осваивать новые технологии и предпочитаю нестандартные подходы. Легко иду на контакт с людьми, хотя я скорее интроверт. Мои сильные стороны: самостоятельность и амбициозность. Из вредных привычек: курение. Обожаю чай и пью его в большем количестве, чем воду. Кофе не употребляю. Играю на гитаре, окончил музыкальную школу по классу фортепиано, хотя сейчас играю на гитаре. Когда есть вдохновение, рисую граффити (в альбомах). В музыке предпочитаю рок, в особенности русский. Плохо переношу холод. Люблю порядок, хотя понимаю его несколько по-своему. Люблю тёмные темы и белые штаны.',
        'uk' => 'Кілька слів про себе: обожнюю програмування та мистецтво майбутнього, мені подобається освоювати нові технології. Швидко навчаюсь та надаю перевагу нестандартним підходам до вирішення поставлених задач. Моїми сильними сторонами є самостійність та амбітність. Легко знаходжу спільну мову з людьми, попри те, що за типом темпераменту я — інтроверт. Моя шкідлива звичка: куріння. Не п\'ю каву, обожнюю чай і вживаю його у дуже великій кількості. Закінчив музичну школу по класу фортепіано, але зараз граю на гітарі. У музиці надаю перевагу року, особливо – російському. Малюю графіті (в альбомах), коли є натхнення та вільний час. Погано переношу холод. Люблю порядок, хоча маю своєрідний підхід до тлумачення цього слова. Мені подобається темна тема та світлі штани.',
    )[$LANG];
    
    $_cnt_contacts_phone = '<a href="tel:+380668938225">+380668938225</a>, <a href="tel:+420775959146<">+420775959146</a>';
    $_cnt_contacts_email = '<a href="mailto:futupas@gmail.com">futupas@gmail.com</a>';
    $_cnt_contacts_telegram = '<a href="https://t.me/Terropen">@Terropen</a>';
    $_cnt_contacts_whatsapp = '<a href="https://wa.me/qr/CUTSK77L327KO1">+420775959146</a>';
    $_cnt_contacts_linkedin = '<a href="https://www.linkedin.com/in/futupas/">linkedin.com/in/futupas</a>';
    $_br = '<br />';
    $cnt_contacts = array(
        'cs' => 'Telefony: '.$_cnt_contacts_phone.$_br.'E-mail: '.$_cnt_contacts_email.$_br.'Telegram: '.$_cnt_contacts_telegram.$_br.'WhatsApp: '.$_cnt_contacts_whatsapp.$_br.$_cnt_contacts_linkedin.'',
        'en' => 'Phones: '.$_cnt_contacts_phone.$_br.'E-mail: '.$_cnt_contacts_email.$_br.'Telegram: '.$_cnt_contacts_telegram.$_br.'WhatsApp: '.$_cnt_contacts_whatsapp.$_br.$_cnt_contacts_linkedin.'',
        'ru' => 'Телефоны: '.$_cnt_contacts_phone.$_br.'Электронная почта: '.$_cnt_contacts_email.$_br.'Телеграм: '.$_cnt_contacts_telegram.$_br.'WhatsApp: '.$_cnt_contacts_whatsapp.$_br.$_cnt_contacts_linkedin.'',
        'uk' => 'Телефони: '.$_cnt_contacts_phone.$_br.'Електронна пошта: '.$_cnt_contacts_email.$_br.'Телеграм: '.$_cnt_contacts_telegram.$_br.'WhatsApp: '.$_cnt_contacts_whatsapp.$_br.$_cnt_contacts_linkedin.'',
    )[$LANG];
?>
