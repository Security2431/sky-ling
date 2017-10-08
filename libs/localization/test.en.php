<?php
$data = array(
  "sever" => $_SERVER["HTTP_HOST"],
  "lang" => "en",
  "title" => "Results of the passed test",
  "logo" => array(
    "SkyLing",
    "Private English classes on Skype"
  ),
  "heading" => "Hi,Thank you for taking the test!",
  "answers" => "You have correctly answered <strong>{{correct}}</strong> out of <strong>{{total}}</strong> questions.",
  "level" => array(
    "text" => "Your level is ",
    "value" => "{{level}}",
    "links" => array(
      "beginner" => $_SERVER["HTTP_HOST"] . "/downloads/Beginner.rar",
      "elementary" => $_SERVER["HTTP_HOST"] . "/downloads/Elementary.rar",
      "pre-intermediate" => $_SERVER["HTTP_HOST"] . "/downloads/Pre-intermediate.rar",
      "intermediate" => $_SERVER["HTTP_HOST"] . "/downloads/Intermediate.rar",
      "upper-intermediate" => $_SERVER["HTTP_HOST"] . "/downloads/Upper-intermediate.rar",
    )
  ),
  "descr" => "We would like to give you your personalized materials for improving your skills.",
  "btn" => array(
    "text" => "Collect your gift here.",
    "href" => "{{download}}"
  ),
  "details" => "You can see the details of your test below.",
  "email" => array(
    "text" => "skyling.onschool@gmail.com",
    "href" =>"mailto:skyling.onschool@gmail.com"
  ),
  "test" => array(
    array(
      "question" => "She_______a teacher.",
      "answers" => array(
        "a" => "(a) is",
        "b" => "(b) are",
        "c" => "(c) am"
      )
    ),
    array(
      "question" => "I_______to work everyday.",
      "answers" => array(
        "a" => "(a) walks",
        "b" => "(b) walk",
        "c" => "(c) walkes"
      )
    ),
    array(
      "question" => "He is_______right now.",
      "answers" => array(
        "a" => "(a) read",
        "b" => "(b) reading",
        "c" => "(c) reads"
      )
    ),
    array(
      "question" => "There_______some milk in the fridge.",
      "answers" => array(
        "a" => "(a) are",
        "b" => "(b) is",
        "c" => "(c) have"
      )
    ),
    array(
      "question" => "When is class?",
      "answers" => array(
        "a" => "(a) at Dawson",
        "b" => "(b) on 9:00 a.m.",
        "c" => "(c) at 9:00 a.m."
      )
    ),
    array(
      "question" => "How old_______you?",
      "answers" => array(
        "a" => "(a) have",
        "b" => "(b) are",
        "c" => "(c) do"
      )
    ),
    array(
      "question" => "How_______students are in the class?",
      "answers" => array(
        "a" => "(a) any",
        "b" => "(b) much",
        "c" => "(c) many"
      )
    ),
    array(
      "question" => "I_______meeting my friend soon.",
      "answers" => array(
        "a" => "(a) am",
        "b" => "(b) ---",
        "c" => "(c) is"
      )
    ),
    array(
      "question" => "When is_______birthday?",
      "answers" => array(
        "a" => "(a) her",
        "b" => "(b) she",
        "c" => "(c) hers"
      )
    ),
    array(
      "question" => "Tania_______to the store yesterday.",
      "answers" => array(
        "a" => "(a) go",
        "b" => "(b) goes",
        "c" => "(c) went"
      )
    ),
    array(
      "question" => "I’m sorry, I_______go to a movie this weekend.",
      "answers" => array(
        "a" => "(a) can",
        "b" => "(b) can’t",
        "c" => "(c) do not"
      )
    ),
    array(
      "question" => "Canada is_______France.",
      "answers" => array(
        "a" => "(a) bigger",
        "b" => "(b) bigger than",
        "c" => "(c) biggest"
      )
    ),
    array(
      "question" => "They_______go to school at 8:30.",
      "answers" => array(
        "a" => "(a) has to",
        "b" => "(b) have to",
        "c" => "(c) can to"
      )
    ),
    array(
      "question" => "He_______basketball on Tuesdays.",
      "answers" => array(
        "a" => "(a) plays",
        "b" => "(b) playing",
        "c" => "(c) is play"
      )
    ),
    array(
      "question" => "How_______do you visit your parents?",
      "answers" => array(
        "a" => "(a) often",
        "b" => "(b) about",
        "c" => "(c) many time"
      )
    ),
    array(
      "question" => "It’s 9:00. Where’s Jim? He’s_______here on time.",
      "answers" => array(
        "a" => "(a) sometimes",
        "b" => "(b) usual",
        "c" => "(c) usually"
      )
    ),
    array(
      "question" => "I love these jeans! I’m going to buy.",
      "answers" => array(
        "a" => "(a) they",
        "b" => "(b) me",
        "c" => "(c) them"
      )
    ),
    array(
      "question" => "Malcolm is busy. He ________ his homework right now.",
      "answers" => array(
        "a" => "(a) is doing",
        "b" => "(b) is do",
        "c" => "(c) doing"
      )
    ),
    array(
      "question" => "I bought cake because there ________ any pies.",
      "answers" => array(
        "a" => "(a) wasn’t",
        "b" => "(b) weren’t",
        "c" => "(c) is not"
      )
    ),
    array(
      "question" => "Susan ________ all day yesterday.",
      "answers" => array(
        "a" => "(a) work",
        "b" => "(b) works",
        "c" => "(c) worked"
      )
    ),
    array(
      "question" => "I’ve already ________ to him this morning.",
      "answers" => array(
        "a" => "(a) speak",
        "b" => "(b) speaked",
        "c" => "(c) spoken"
      )
    ),
    array(
      "question" => "Can I please have ________ sugar for my tea?",
      "answers" => array(
        "a" => "(a) any",
        "b" => "(b) some",
        "c" => "(c) much"
      )
    ),
    array(
      "question" => "Mary has lived in Calgary ________ 25 years.",
      "answers" => array(
        "a" => "(a) since",
        "b" => "(b) for",
        "c" => "(c) until"
      )
    ),
    array(
      "question" => "We ________ home when we saw the accident.",
      "answers" => array(
        "a" => "(a) were walking",
        "b" => "(b) are walking",
        "c" => "(c) is walking"
      )
    ),
    array(
      "question" => "They are moving in 2 days! They ________ start packing.",
      "answers" => array(
        "a" => "(a) have better",
        "b" => "(b) had better",
        "c" => "(c) must to"
      )
    ),
    array(
      "question" => "Doctors tell us to avoid ________ fatty foods.",
      "answers" => array(
        "a" => "(a) to eat",
        "b" => "(b) eating",
        "c" => "(c) eats"
      )
    ),
    array(
      "question" => "The Montreal Metro system ________ in the late 60s.",
      "answers" => array(
        "a" => "(a) was build",
        "b" => "(b) was built",
        "c" => "(c) builded"
      )
    ),
    array(
      "question" => "My new apartment is ________ my old one. They are the same size.",
      "answers" => array(
        "a" => "(a) as big as",
        "b" => "(b) bigger",
        "c" => "(c) as big"
      )
    ),
    array(
      "question" => "If I ________ more money I would go on holiday.",
      "answers" => array(
        "a" => "(a) have",
        "b" => "(b) had",
        "c" => "(c) has"
      )
    ),
    array(
      "question" => "The kids are bored with ________ TV. Let’s go out.",
      "answers" => array(
        "a" => "(a) to watch",
        "b" => "(b) watching",
        "c" => "(c) watch"
      )
    ),
    array(
      "question" => "It’s a beautiful day?",
      "answers" => array(
        "a" => "(a) is it",
        "b" => "(b) isn’t it",
        "c" => "(c) it is"
      )
    ),
    array(
      "question" => "Jane introduced her husband to her boss because they ________ before.",
      "answers" => array(
        "a" => "(a) had never met",
        "b" => "(b) has never met",
        "c" => "(c) had never meet"
      )
    ),
    array(
      "question" => "That’s the store where you can ________ your film ________ in an hour.",
      "answers" => array(
        "a" => "(a) get/develop",
        "b" => "(b) have/develop",
        "c" => "(c) get/developed"
      )
    ),
    array(
      "question" => "Mary ________ to France, but she changed her mind.",
      "answers" => array(
        "a" => "(a) was going to go",
        "b" => "(b) went",
        "c" => "(c) going to go"
      )
    ),
    array(
      "question" => "The couple ________ at the restaurant are on their honeymoon.",
      "answers" => array(
        "a" => "(a) who were eating",
        "b" => "(b) were eating",
        "c" => "(c) whose were eating"
      )
    ),
    array(
      "question" => "Kevin told me that he ________ for the airport at 6:30.",
      "answers" => array(
        "a" => "(a) was left",
        "b" => "(b) was leaving",
        "c" => "(c) was leave"
      )
    ),
    array(
      "question" => "By next week I ________ finished the report.",
      "answers" => array(
        "a" => "(a) will have",
        "b" => "(b) have",
        "c" => "(c) was"
      )
    ),
    array(
      "question" => "Sarah hopes ________ school in the fall.",
      "answers" => array(
        "a" => "(a) starting",
        "b" => "(b) to start",
        "c" => "(c) starts"
      )
    ),
    array(
      "question" => "It isn’t warm enough ________ swimming today.",
      "answers" => array(
        "a" => "(a) to go",
        "b" => "(b) for go",
        "c" => "(c) go"
      )
    ),
    array(
      "question" => "She’ll ________ her mother in Toronto in June.",
      "answers" => array(
        "a" => "(a) to visit",
        "b" => "(b) be visiting",
        "c" => "(c) visits"
      )
    ),
    array(
      "question" => "My parents were thrilled ________ that I got engaged.",
      "answers" => array(
        "a" => "(a) about hear",
        "b" => "(b) to hear",
        "c" => "(c) hearing"
      )
    ),
    array(
      "question" => "By the time the show started the audience ________ for an hour.",
      "answers" => array(
        "a" => "(a) had been waiting",
        "b" => "(b) has been waiting",
        "c" => "(c) had wait"
      )
    ),
    array(
      "question" => "What would you have done if you ________ a cell phone?",
      "answers" => array(
        "a" => "(a) wouldn’t have",
        "b" => "(b) hadn’t had",
        "c" => "(c) wouldn’t has"
      )
    ),
    array(
      "question" => "Each of us ________ some housework.",
      "answers" => array(
        "a" => "(a) does",
        "b" => "(b) makes",
        "c" => "(c) to do"
      )
    ),
    array(
      "question" => "Calgary doesn’t have a subway system and  ________ Vancouver.",
      "answers" => array(
        "a" => "(a) so does",
        "b" => "(b) neither does",
        "c" => "(c) either does"
      )
    ),
    array(
      "question" => array(
        "A: Did you go to your brother’s last night?",
        "B, Yes, but I ________ stayed home."
      ),
      "answers" => array(
        "a" => "(a) would rather have",
        "b" => "(b) should to",
        "c" => "(c) should had"
      )
    ),
    array(
      "question" => "________ a late lunch they weren’t ready to eat again until 9:00 pm.",
      "answers" => array(
        "a" => "(a) To eat",
        "b" => "(b) Having had",
        "c" => "(c) To have had"
      )
    ),
    array(
      "question" => "It’s ________ a comedy than a drama.",
      "answers" => array(
        "a" => "(a) more of",
        "b" => "(b) more than",
        "c" => "(c) as more as"
      )
    ),
    array(
      "question" => "The reporter ________ the editor that she would have the article ready by tomorrow.",
      "answers" => array(
        "a" => "(a) said",
        "b" => "(b) told",
        "c" => "(c) told to"
      )
    ),
    array(
      "question" => "If she’d taken the bus, she ____________ on time.",
      "answers" => array(
        "a" => "(a) would arrive",
        "b" => "(b) will arrive",
        "c" => "(c) would’ve arrived"
      )
    ),
  ),
);

?>
