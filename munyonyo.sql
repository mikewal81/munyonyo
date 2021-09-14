START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `tel` char(20) DEFAULT NULL,
  `email` char(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` enum('M','W','B','F','OD','O','N') NOT NULL DEFAULT 'N',
  `other` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `paid` enum('2','3') NOT NULL DEFAULT '3',
  `completed` enum('2','3') NOT NULL DEFAULT '3'
) ;

INSERT INTO `events` (`id`, `owner`, `tel`, `email`, `location`, `date`, `time`, `type`, `other`, `details`, `user_id`, `paid`, `completed`) VALUES
(1, 'Susi Eakens', '239-813-5385', 'seakens0@sohu.com', 'Charing Cross', '2021-11-16', '10:30:00', 'M', '', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 10, '2', '3'),
(2, 'Carolina Tetford', '583-718-0293', 'ctetford1@acquirethisname.com', '5th', '2021-12-13', '15:14:00', 'W', '', 'Maecenas ut massa quis augue luctus tincidunt.', 10, '3', '3'),
(3, 'Mitchell Frascone', '655-631-7989', 'mfrascone2@webeden.co.uk', 'Tomscot', '2021-11-04', '13:07:00', 'B', '', 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 24, '2', '3'),
(4, 'Erinn Peace', '199-359-5350', 'epeace3@guardian.co.uk', 'Maywood', '2021-09-18', '13:28:00', 'W', '', 'Pellentesque ultrices mattis odio. Donec vitae nisi.', 20, '3', '2'),
(5, 'Chelsey Ablitt', '756-250-8741', 'cablitt4@scientificamerican.com', 'Longview', '2021-12-21', '13:48:00', 'OD', '', 'Nulla nisl.', 6, '2', '2'),
(6, 'Anastasia Kirkwood', '396-233-9768', 'akirkwood5@blogspot.com', 'Miller', '2021-09-26', '13:32:00', 'B', '', 'Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 4, '2', '2'),
(7, 'Alexi Cayford', '866-672-4994', 'acayford6@wufoo.com', 'Bartelt', '2021-12-06', '14:45:00', 'M', '', 'Fusce consequat. Nulla nisl.', 7, '3', '2'),
(8, 'Marnie Lamplugh', '141-603-8469', 'mlamplugh7@nba.com', 'Algoma', '2021-11-29', '18:58:00', 'O', '', 'Nam dui.', 24, '2', '3'),
(9, 'Camey Biaggioni', '666-425-9031', 'cbiaggioni8@chicagotribune.com', 'Green Ridge', '2021-12-27', '08:11:00', 'OD', '', 'Vivamus vestibulum sagittis sapien.', 18, '2', '2'),
(10, 'Brendin Kleinhausen', '442-487-8751', 'bkleinhausen9@1688.com', 'Nova', '2021-12-23', '19:21:00', 'W', '', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 3, '3', '2'),
(11, 'Rhett Askie', '981-714-8673', 'raskiea@about.me', 'Loeprich', '2021-11-13', '19:00:00', 'M', '', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim.', 25, '2', '2'),
(12, 'Base Platt', '305-795-6175', 'bplattb@utexas.edu', 'Ohio', '2021-10-15', '18:51:00', 'B', '', 'Nulla mollis molestie lorem. Quisque ut erat.', 20, '3', '3'),
(13, 'Millie Foottit', '282-858-9545', 'mfoottitc@simplemachines.org', 'Manitowish', '2021-12-05', '15:41:00', 'OD', '', 'Nulla facilisi.', 15, '2', '2'),
(14, 'Ginnifer Fibbens', '215-386-2749', 'gfibbensd@t-online.de', 'Maple', '2021-11-18', '10:33:00', 'N', '', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 5, '3', '3');

CREATE TABLE `execs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `cm` int(11) NOT NULL,
  `vcm` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `dir` int(11) NOT NULL,
  `org` int(11) NOT NULL,
  `sop` int(11) NOT NULL,
  `alt` int(11) NOT NULL,
  `ten` int(11) NOT NULL,
  `bass` int(11) NOT NULL
) ;

INSERT INTO `execs` (`id`, `start`, `end`, `cm`, `vcm`, `sec`, `dir`, `org`, `sop`, `alt`, `ten`, `bass`) VALUES
(1, '2012-03-05', '2014-03-04', 24, 16, 16, 4, 7, 24, 14, 4, 11),
(2, '2014-03-05', '2016-03-04', 6, 17, 23, 21, 14, 19, 22, 24, 8),
(3, '2016-03-05', '2018-03-04', 15, 20, 11, 10, 8, 20, 6, 25, 4),
(4, '2018-03-05', '2020-03-04', 5, 15, 8, 8, 24, 10, 9, 3, 19),
(5, '2020-03-05', '2022-03-04', 9, 21, 5, 16, 16, 24, 6, 3, 6);

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(5) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ;

INSERT INTO `logins` (`id`, `user_id`, `user_name`, `password`) VALUES
(1, '1', 'jackieN', '123456789'),
(2, '2', 'mikewal81', 'W37m81#3R');

CREATE TABLE `readings` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `saint` varchar(255) DEFAULT NULL,
  `first` varchar(255) NOT NULL,
  `first_details` text DEFAULT NULL,
  `response` varchar(255) NOT NULL,
  `response_details` text DEFAULT NULL,
  `second` varchar(255) DEFAULT NULL,
  `second_details` text DEFAULT NULL,
  `alleluia` varchar(255) DEFAULT NULL,
  `alleluia_details` text DEFAULT NULL,
  `gospel` varchar(255) NOT NULL,
  `gospel_details` text DEFAULT NULL
) ;

INSERT INTO `readings` (`id`, `date`, `saint`, `first`, `first_details`, `response`, `response_details`, `second`, `second_details`, `alleluia`, `alleluia_details`, `gospel`, `gospel_details`) VALUES
(1, '2021-09-09', 'Saint Peter Claver', 'Col 3:12-17', 'Brothers and sisters:\r\nPut on, as God’s chosen ones, holy and beloved,\r\nheartfelt compassion, kindness, humility, gentleness, and patience,\r\nbearing with one another and forgiving one another,\r\nif one has a grievance against another;\r\nas the Lord has forgiven you, so must you also do.\r\nAnd over all these put on love,\r\nthat is, the bond of perfection.\r\nAnd let the peace of Christ control your hearts,\r\nthe peace into which you were also called in one Body.\r\nAnd be thankful.\r\nLet the word of Christ dwell in you richly,\r\nas in all wisdom you teach and admonish one another,\r\nsinging psalms, hymns, and spiritual songs\r\nwith gratitude in your hearts to God.\r\nAnd whatever you do, in word or in deed,\r\ndo everything in the name of the Lord Jesus,\r\ngiving thanks to God the Father through him.', 'Ps. 150:1b-2, 3-4, 5-6', 'R.    (6) Let everything that breathes praise the Lord!\r\nPraise the LORD in his sanctuary,\r\n    praise him in the firmament of his strength.\r\nPraise him for his mighty deeds,\r\n    praise him for his sovereign majesty. \r\nR.    Let everything that breathes praise the Lord!\r\nPraise him with the blast of the trumpet,\r\n    praise him with lyre and harp,\r\nPraise him with timbrel and dance,\r\n    praise him with strings and pipe.\r\nR.    Let everything that breathes praise the Lord!\r\nPraise him with sounding cymbals,\r\n    praise him with clanging cymbals.\r\nLet everything that has breath\r\n    praise the LORD! Alleluia.\r\nR.    Let everything that breathes praise the Lord!', NULL, NULL, '1 Jn 4:12', 'R. Alleluia, alleluia.\r\nIf we love one another,\r\nGod remains in us,\r\nand his love is brought to perfection in us.\r\nR. Alleluia, alleluia.', 'Lk 6:27-38', 'Jesus said to his disciples:\r\n“To you who hear I say, love your enemies,\r\ndo good to those who hate you, bless those who curse you,\r\npray for those who mistreat you.\r\nTo the person who strikes you on one cheek,\r\noffer the other one as well,\r\nand from the person who takes your cloak,\r\ndo not withhold even your tunic.\r\nGive to everyone who asks of you,\r\nand from the one who takes what is yours do not demand it back.\r\nDo to others as you would have them do to you.\r\nFor if you love those who love you,\r\nwhat credit is that to you?\r\nEven sinners love those who love them.\r\nAnd if you do good to those who do good to you,\r\nwhat credit is that to you?\r\nEven sinners do the same.\r\nIf you lend money to those from whom you expect repayment,\r\nwhat credit is that to you?\r\nEven sinners lend to sinners,\r\nand get back the same amount. \r\nBut rather, love your enemies and do good to them,\r\nand lend expecting nothing back;\r\nthen your reward will be great\r\nand you will be children of the Most High,\r\nfor he himself is kind to the ungrateful and the wicked.\r\nBe merciful, just as also your Father is merciful.\r\n\r\n“Stop judging and you will not be judged.\r\nStop condemning and you will not be condemned.\r\nForgive and you will be forgiven.\r\nGive and gifts will be given to you;\r\na good measure, packed together, shaken down, and overflowing,\r\nwill be poured into your lap.\r\nFor the measure with which you measure\r\nwill in return be measured out to you.”'),
(2, '2021-09-10', 'Saint Agapius of Novara', '1 Tm 1:1-2, 12-14', 'Paul, an Apostle of Christ Jesus by command of God our savior\r\nand of Christ Jesus our hope,\r\nto Timothy, my true child in faith:\r\ngrace, mercy, and peace from God the Father\r\nand Christ Jesus our Lord.\r\nI am grateful to him who has strengthened me, Christ Jesus our Lord,\r\nbecause he considered me trustworthy\r\nin appointing me to the ministry.\r\nI was once a blasphemer and a persecutor and an arrogant man,\r\nbut I have been mercifully treated\r\nbecause I acted out of ignorance in my unbelief.\r\nIndeed, the grace of our Lord has been abundant,\r\nalong with the faith and love that are in Christ Jesus.', 'Ps. 16:1b-2a and 5, 7-8, 11', 'R.    (see 5) You are my inheritance, O Lord.\r\nKeep me, O God, for in you I take refuge;\r\n    I say to the LORD, “My Lord are you.”\r\nO LORD, my allotted portion and my cup,\r\n    you it is who hold fast my lot.\r\nR.    You are my inheritance, O Lord.\r\nI bless the LORD who counsels me;\r\n    even in the night my heart exhorts me.\r\nI set the LORD ever before me;\r\n    with him at my right hand I shall not be disturbed.\r\nR.    You are my inheritance, O Lord.\r\nYou will show me the path to life,\r\n    fullness of joys in your presence,\r\n    the delights at your right hand forever.\r\nR.    You are my inheritance, O Lord.', NULL, NULL, 'Jn 17:17b, 17a', 'R. Alleluia, alleluia.\r\nYour word, O Lord, is truth;\r\nconsecrate us in the truth.\r\nR. Alleluia, alleluia.', 'Lk 6:39-42', 'Jesus told his disciples a parable:\r\n“Can a blind person guide a blind person?\r\nWill not both fall into a pit?\r\nNo disciple is superior to the teacher;\r\nbut when fully trained,\r\nevery disciple will be like his teacher.\r\nWhy do you notice the splinter in your brother’s eye,\r\nbut do not perceive the wooden beam in your own?\r\nHow can you say to your brother,\r\n‘Brother, let me remove that splinter in your eye,’\r\nwhen you do not even notice the wooden beam in your own eye?\r\nYou hypocrite!  Remove the wooden beam from your eye first;\r\nthen you will see clearly\r\nto remove the splinter in your brother’s eye.”'),
(3, '2021-09-11', 'Blessed Charles Spinola', '1 Tm 1:15-17', 'Beloved:\r\nThis saying is trustworthy and deserves full acceptance:\r\nChrist Jesus came into the world to save sinners.\r\nOf these I am the foremost.\r\nBut for that reason I was mercifully treated,\r\nso that in me, as the foremost,\r\nChrist Jesus might display all his patience as an example\r\nfor those who would come to believe in him for everlasting life. \r\nTo the king of ages, incorruptible, invisible, the only God,\r\nhonor and glory forever and ever. Amen.', 'Ps. 113:1b-2, 3-4, 5 and 6-7', 'R. (2) Blessed be the name of the Lord for ever.\r\nPraise, you servants of the LORD,\r\n    praise the name of the LORD.\r\nBlessed be the name of the LORD\r\n    both now and forever.\r\nR. Blessed be the name of the Lord for ever.\r\nFrom the rising to the setting of the sun\r\n    is the name of the LORD to be praised.\r\nHigh above all nations is the LORD;\r\n    above the heavens is his glory.\r\nR. Blessed be the name of the Lord for ever.\r\nWho is like the LORD, our God,\r\n    and looks upon the heavens and the earth below?\r\nHe raises up the lowly from the dust;\r\n    from the dunghill he lifts up the poor.\r\nR. Blessed be the name of the Lord for ever.', NULL, NULL, 'Jn 14:23', 'R. Alleluia, alleluia.\r\nWhoever loves me will keep my word,\r\nand my Father will love him,\r\nand we will come to him.\r\nR. Alleluia, alleluia.', 'Lk 6:43-49', 'Jesus said to his disciples:\r\n“A good tree does not bear rotten fruit,\r\nnor does a rotten tree bear good fruit.\r\nFor every tree is known by its own fruit.\r\nFor people do not pick figs from thornbushes,\r\nnor do they gather grapes from brambles.\r\nA good person out of the store of goodness in his heart produces good,\r\nbut an evil person out of a store of evil produces evil;\r\nfor from the fullness of the heart the mouth speaks.\r\n\r\n“Why do you call me, ‘Lord, Lord,’ but not do what I command?\r\nI will show you what someone is like who comes to me,\r\nlistens to my words, and acts on them.\r\nThat one is like a man building a house,\r\nwho dug deeply and laid the foundation on rock;\r\nwhen the flood came, the river burst against that house\r\nbut could not shake it because it had been well built.\r\nBut the one who listens and does not act\r\nis like a person who built a house on the ground\r\nwithout a foundation.\r\nWhen the river burst against it,\r\nit collapsed at once and was completely destroyed.”');
INSERT INTO `readings` (`id`, `date`, `saint`, `first`, `first_details`, `response`, `response_details`, `second`, `second_details`, `alleluia`, `alleluia_details`, `gospel`, `gospel_details`) VALUES
(4, '2021-09-12', 'Feast of the Holy Name of Mary', 'Is 50:5-9a', 'The Lord GOD opens my ear that I may hear;\r\nand I have not rebelled,\r\n    have not turned back.\r\nI gave my back to those who beat me,\r\n    my cheeks to those who plucked my beard;\r\nmy face I did not shield\r\n    from buffets and spitting.\r\n\r\nThe Lord GOD is my help,\r\n    therefore I am not disgraced;\r\nI have set my face like flint,\r\n    knowing that I shall not be put to shame.\r\nHe is near who upholds my right;\r\n    if anyone wishes to oppose me,\r\n    let us appear together.\r\nWho disputes my right?\r\n    Let that man confront me.\r\nSee, the Lord GOD is my help;\r\n    who will prove me wrong?', 'Ps 116:1-2, 3-4, 5-6, 8-9', 'R. (9)    I will walk before the Lord, in the land of the living.\r\nor:\r\nR.    Alleluia.\r\nI love the LORD because he has heard\r\n    my voice in supplication,\r\nBecause he has inclined his ear to me\r\n    the day I called.\r\nR. I will walk before the Lord, in the land of the living.\r\nor:\r\nR.    Alleluia.\r\nThe cords of death encompassed me;\r\n    the snares of the netherworld seized upon me;\r\n    I fell into distress and sorrow,\r\nAnd I called upon the name of the LORD,\r\n    “O LORD, save my life!”\r\nR. I will walk before the Lord, in the land of the living.\r\nor:\r\nR. Alleluia.\r\nGracious is the LORD and just;\r\n    yes, our God is merciful.\r\nThe LORD keeps the little ones;\r\n    I was brought low, and he saved me.\r\nR. I will walk before the Lord, in the land of the living.\r\nor:\r\nR. Alleluia.\r\nFor he has freed my soul from death,\r\n    my eyes from tears, my feet from stumbling.\r\nI shall walk before the LORD\r\n    in the land of the living.\r\nR. I will walk before the Lord, in the land of the living.\r\nor:\r\nR. Alleluia.', 'Jas 2:14-18', 'What good is it, my brothers and sisters,\r\nif someone says he has faith but does not have works? \r\nCan that faith save him? \r\nIf a brother or sister has nothing to wear\r\nand has no food for the day,\r\nand one of you says to them,\r\n“Go in peace, keep warm, and eat well, ”\r\nbut you do not give them the necessities of the body,\r\nwhat good is it? \r\nSo also faith of itself,\r\nif it does not have works, is dead.\r\n\r\nIndeed someone might say,\r\n“You have faith and I have works.” \r\nDemonstrate your faith to me without works,\r\nand I will demonstrate my faith to you from my works.', 'Gal 6:14', 'R. Alleluia, alleluia.\r\nMay I never boast except in the cross of our Lord\r\nthrough which the world has been crucified to me and I to the world.\r\nR. Alleluia, alleluia.', 'Mk 8:27-35', 'Jesus and his disciples set out\r\nfor the villages of Caesarea Philippi. \r\nAlong the way he asked his disciples,\r\n“Who do people say that I am?” \r\nThey said in reply,\r\n“John the Baptist, others Elijah,\r\nstill others one of the prophets.” \r\nAnd he asked them,\r\n“But who do you say that I am?” \r\nPeter said to him in reply,\r\n“You are the Christ.” \r\nThen he warned them not to tell anyone about him.\r\n\r\nHe began to teach them\r\nthat the Son of Man must suffer greatly\r\nand be rejected by the elders, the chief priests, and the scribes,\r\nand be killed, and rise after three days. \r\nHe spoke this openly. \r\nThen Peter took him aside and began to rebuke him. \r\nAt this he turned around and, looking at his disciples,\r\nrebuked Peter and said, “Get behind me, Satan. \r\nYou are thinking not as God does, but as human beings do.”\r\n\r\nHe summoned the crowd with his disciples and said to them,\r\n“Whoever wishes to come after me must deny himself,\r\ntake up his cross, and follow me. \r\nFor whoever wishes to save his life will lose it,\r\nbut whoever loses his life for my sake\r\nand that of the gospel will save it.”'),
(5, '2021-09-13', 'Saint John Chrysostom, Bishop and Doctor', '1 Tm 2:1-8', 'Beloved:\r\nFirst of all, I ask that supplications, prayers,\r\npetitions, and thanksgivings be offered for everyone,\r\nfor kings and for all in authority,\r\nthat we may lead a quiet and tranquil life\r\nin all devotion and dignity. \r\nThis is good and pleasing to God our savior,\r\nwho wills everyone to be saved\r\nand to come to knowledge of the truth.\r\n\r\n    For there is one God.\r\n    There is also one mediator between God and men,\r\n    the man Christ Jesus,\r\n    who gave himself as ransom for all.\r\n\r\nThis was the testimony at the proper time. \r\nFor this I was appointed preacher and Apostle\r\n(I am speaking the truth, I am not lying),\r\nteacher of the Gentiles in faith and truth.\r\n\r\nIt is my wish, then, that in every place the men should pray,\r\nlifting up holy hands, without anger or argument. ', 'Ps. 28:2, 7, 8-9', 'R.    (6) Blessed be the Lord, for he has heard my prayer.\r\nHear the sound of my pleading, when I cry to you,\r\n    lifting up my hands toward your holy shrine.\r\nR.    Blessed be the Lord, for he has heard my prayer.\r\nThe LORD is my strength and my shield.\r\nIn him my heart trusts, and I find help;\r\n    then my heart exults, and with my song I give him thanks.\r\nR.    Blessed be the Lord, for he has heard my prayer.\r\nThe LORD is the strength of his people,\r\n    the saving refuge of his anointed.\r\nSave your people, and bless your inheritance;\r\n    feed them, and carry them forever!\r\nR.    Blessed be the Lord, for he has heard my prayer.', NULL, NULL, 'Jn 3:16', 'R. Alleluia, alleluia.\r\nGod so loved the world that he gave his only-begotten Son,\r\nso that everyone who believes in him might have eternal life.\r\nR. Alleluia, alleluia.', 'Lk 7:1-10', 'When Jesus had finished all his words to the people,\r\nhe entered Capernaum.\r\nA centurion there had a slave who was ill and about to die,\r\nand he was valuable to him.\r\nWhen he heard about Jesus, he sent elders of the Jews to him,\r\nasking him to come and save the life of his slave.\r\nThey approached Jesus and strongly urged him to come, saying,\r\n“He deserves to have you do this for him,\r\nfor he loves our nation and he built the synagogue for us.”\r\nAnd Jesus went with them,\r\nbut when he was only a short distance from the house,\r\nthe centurion sent friends to tell him,\r\n“Lord, do not trouble yourself,\r\nfor I am not worthy to have you enter under my roof.\r\nTherefore, I did not consider myself worthy to come to you;\r\nbut say the word and let my servant be healed.\r\nFor I too am a person subject to authority,\r\nwith soldiers subject to me.\r\nAnd I say to one, Go, and he goes;\r\nand to another, Come here, and he comes;\r\nand to my slave, Do this, and he does it.”\r\nWhen Jesus heard this he was amazed at him\r\nand, turning, said to the crowd following him,\r\n“I tell you, not even in Israel have I found such faith.”\r\nWhen the messengers returned to the house,\r\nthey found the slave in good health.');
INSERT INTO `readings` (`id`, `date`, `saint`, `first`, `first_details`, `response`, `response_details`, `second`, `second_details`, `alleluia`, `alleluia_details`, `gospel`, `gospel_details`) VALUES
(6, '2021-09-14', ' Feast of the Exaltation of the Holy Cross', 'Nm 21:4b-9', 'With their patience worn out by the journey,\r\nthe people complained against God and Moses,\r\n“Why have you brought us up from Egypt to die in this desert,\r\nwhere there is no food or water?\r\nWe are disgusted with this wretched food!”\r\n\r\nIn punishment the LORD sent among the people saraph serpents,\r\nwhich bit the people so that many of them died.\r\nThen the people came to Moses and said,\r\n“We have sinned in complaining against the LORD and you.\r\nPray the LORD to take the serpents from us.”\r\nSo Moses prayed for the people, and the LORD said to Moses,\r\n“Make a saraph and mount it on a pole,\r\nand if any who have been bitten look at it, they will live.”\r\nMoses accordingly made a bronze serpent and mounted it on a pole,\r\nand whenever anyone who had been bitten by a serpent \r\nlooked at the bronze serpent, he lived.    ', 'Ps. 78:1bc-2, 34-35, 36-37, 38', 'R.    (see 7b)  Do not forget the works of the Lord!\r\nHearken, my people, to my teaching;\r\n    incline your ears to the words of my mouth.\r\nI will open my mouth in a parable,\r\n    I will utter mysteries from of old.\r\nR.    Do not forget the works of the Lord!\r\nWhile he slew them they sought him\r\n    and inquired after God again,\r\nRemembering that God was their rock\r\n    and the Most High God, their redeemer.\r\nR.    Do not forget the works of the Lord!\r\nBut they flattered him with their mouths\r\n    and lied to him with their tongues,\r\nThough their hearts were not steadfast toward him,\r\n    nor were they faithful to his covenant.\r\nR.    Do not forget the works of the Lord!\r\nBut he, being merciful, forgave their sin\r\n    and destroyed them not;\r\nOften he turned back his anger\r\n    and let none of his wrath be roused.\r\nR.    Do not forget the works of the Lord!', 'Phil 2:6-11', 'Brothers and sisters:\r\n    Christ Jesus, though he was in the form of God,\r\n        did not regard equality with God something to be grasped.\r\n    Rather, he emptied himself,\r\n    taking the form of a slave,\r\n    coming in human likeness;\r\n    and found human in appearance,\r\n    he humbled himself,\r\n    becoming obedient to death,\r\n        even death on a cross.\r\nBecause of this, God greatly exalted him\r\n    and bestowed on him the name\r\n    that is above every name,\r\n    that at the name of Jesus\r\n    every knee should bend,\r\n    of those in heaven and on earth and under the earth,\r\n    and every tongue confess that\r\n    Jesus Christ is Lord,\r\n    to the glory of God the Father.', '', 'R. Alleluia, alleluia.\r\nWe adore you, O Christ, and we bless you,\r\nbecause by your Cross you have redeemed the world.\r\nR. Alleluia, alleluia.', 'Jn 3:13-17', 'Jesus said to Nicodemus:\r\n“No one has gone up to heaven\r\nexcept the one who has come down from heaven, the Son of Man.\r\nAnd just as Moses lifted up the serpent in the desert,\r\nso must the Son of Man be lifted up,\r\nso that everyone who believes in him may have eternal life.”\r\n\r\nFor God so loved the world that he gave his only Son,\r\nso that everyone who believes in him might not perish\r\nbut might have eternal life.\r\nFor God did not send his Son into the world to condemn the world,\r\nbut that the world might be saved through him. '),
(7, '2021-09-15', 'Our Lady of Sorrows', '1 Tm 3:14-16', 'Beloved:\r\nI am writing you,\r\nalthough I hope to visit you soon.\r\nBut if I should be delayed,\r\nyou should know how to behave in the household of God,\r\nwhich is the Church of the living God,\r\nthe pillar and foundation of truth.\r\nUndeniably great is the mystery of devotion,\r\n\r\n    Who was manifested in the flesh,\r\n    vindicated in the spirit,\r\n    seen by angels,\r\n    proclaimed to the Gentiles,\r\n    believed in throughout the world,\r\n    taken up in glory.', 'Ps. 111:1-2, 3-4, 5-6', 'R.    (2) How great are the works of the Lord!\r\nI will give thanks to the LORD with all my heart\r\n    in the company and assembly of the just.\r\nGreat are the works of the LORD,\r\n    exquisite in all their delights.\r\nR.    How great are the works of the Lord!\r\nMajesty and glory are his work,\r\n    and his justice endures forever.\r\nHe has won renown for his wondrous deeds;\r\n    gracious and merciful is the LORD.\r\nR.    How great are the works of the Lord!\r\nHe has given food to those who fear him;\r\n    he will forever be mindful of his covenant.\r\nHe has made known to his people the power of his works,\r\n    giving them the inheritance of the nations.\r\nR.    How great are the works of the Lord!', NULL, NULL, '', 'R. Alleluia, alleluia.\r\nBlessed are you, O Virgin Mary;\r\nwithout dying you won the Martyr’s crown\r\nbeneath the Cross of the Lord.\r\nR. Alleluia, alleluia.', 'Jn 19:25-27 OR Lk 2:33-35', 'Standing by the cross of Jesus were his mother\r\nand his mother’s sister, Mary the wife of Clopas,\r\nand Mary Magdalene.\r\nWhen Jesus saw his mother and the disciple there whom he loved\r\nhe said to his mother, “Woman, behold, your son.”\r\nThen he said to the disciple,\r\n“Behold, your mother.”\r\nAnd from that hour the disciple took her into his home.\r\n\r\nOR\r\n\r\nJesus’ father and mother were amazed at what was said about him;\r\nand Simeon blessed them and said to Mary his mother,\r\n“Behold, this child is destined\r\nfor the fall and rise of many in Israel,\r\nand to be a sign that will be contradicted\r\nand you yourself a sword will pierce\r\nso that the thoughts of many hearts may be revealed.”');

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `voice` int(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` char(255) DEFAULT NULL
) ;

INSERT INTO `users` (`id`, `f_name`, `l_name`, `gender`, `voice`, `email`, `tel`) VALUES
(1, 'Jackie', 'Nalugga', 'F', NULL, 'jackienalugga@gmail.com', '+256-726-014854'),
(2, 'Michael', 'Walusimbi', 'M', 3, 'walusimbimichael@gmail.com', '+256-785-291241'),
(3, 'Averil', 'Collie', 'M', 2, 'acollie0@people.com.cn', '+374 369 728 0131'),
(4, 'Fiona', 'Brade', 'F', 2, 'fbrade1@examiner.com', '+92 776 337 9808'),
(5, 'Orlando', 'Green', 'M', 4, 'ogreen2@businessinsider.com', '+86 319 637 8750'),
(6, 'Clementius', 'Hofner', 'M', 3, 'chofner3@go.com', '+241 140 685 7502'),
(7, 'Michail', 'Kinnard', 'M', 2, 'mkinnard4@taobao.com', '+224 973 271 7710'),
(8, 'Fred', 'Hubatsch', 'F', 1, 'fhubatsch5@gmpg.org', '+351 397 563 8601'),
(9, 'Georgie', 'O\'Dea', 'M', 4, 'godea6@yellowpages.com', '+55 968 869 0365'),
(10, 'Julia', 'Sharpous', 'F', 1, 'jsharpous7@shareasale.com', '+31 550 534 5334'),
(11, 'Ursuline', 'Isherwood', 'F', 1, 'uisherwood8@vinaora.com', '+44 629 777 3705'),
(12, 'Fremont', 'Telford', 'M', 3, 'ftelford9@barnesandnoble.com', '+55 179 582 0717'),
(13, 'York', 'Nickolls', 'M', 2, 'ynickollsa@ted.com', '+380 684 865 1295'),
(14, 'Ramsay', 'Tupper', 'M', 4, 'rtupperb@psu.edu', '+46 468 432 7522'),
(15, 'Oswald', 'Gregor', 'M', 3, 'ogregorc@addtoany.com', '+509 502 528 2081'),
(16, 'Chrissie', 'Riccio', 'F', 4, 'cricciod@answers.com', '+81 320 191 9344'),
(17, 'Palmer', 'Sherwill', 'M', 2, 'psherwille@dot.gov', '+66 383 538 1207'),
(18, 'Annice', 'Rabjohns', 'F', 1, 'arabjohnsf@bing.com', '+46 683 593 9816'),
(19, 'Gino', 'Baudinot', 'M', 3, 'gbaudinotg@networkadvertising.org', '+353 272 915 7261'),
(20, 'Desiri', 'Smurfitt', 'F', 1, 'dsmurfitth@blogs.com', '+62 690 580 5609'),
(21, 'Eliza', 'Schwaiger', 'F', 2, 'eschwaigeri@stanford.edu', '+84 699 596 8231'),
(22, 'Franklyn', 'Tock', 'M', 4, 'ftockj@live.com', '+86 661 474 6594'),
(23, 'Terrijo', 'Franzewitch', 'F', 1, 'tfranzewitchk@blog.com', '+63 164 755 4374'),
(24, 'Letitia', 'Jennison', 'F', 2, 'ljennisonl@yelp.com', '+63 813 868 7060'),
(25, 'Silvan', 'Lyal', 'M', 4, 'slyalm@mapquest.com', '+86 955 311 6006'),
(26, 'Nick', 'Beardsell', 'M', 1, 'nbeardselln@purevolume.com', '+55 472 131 4182'),
(27, 'Reilly', 'Eixenberger', 'M', 4, 'reixenbergero@hc360.com', '+86 127 885 3362');


ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `execs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `readings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `execs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `readings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
USE phpmyadmin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
