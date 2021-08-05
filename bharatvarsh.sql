-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 10:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharatvarsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(19, 11, 25),
(20, 11, 58),
(21, 11, 61),
(23, 11, 66),
(24, 18, 68),
(25, 17, 68);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `readtime` int(10) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `approval` tinyint(1) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `class`, `title`, `readtime`, `content`, `approval`, `image`, `likes`, `dislikes`, `date`) VALUES
(25, 11, 'people', 'Karna - The Great Warrior', 6, 'Karna, who was the biological son of Kunti and Lord Surya, was killed by Arjuna on the 17th day of the Mahabharata war. He is believed to have known dharma but died because he did not understand the true meaning of it and sided with adharma in his life. Apart from being a great archer and warrior, he is also known as ‘Danveer Karna’ because he made some great and unbelievable donations. One of the greatest donations that he made was of his armour to Lord Indra.\r\n\r\nHe was born with a divine armour attached to his body. The armour was impenetrable by any weapon which made Lord Indra worried about his son Arjuna and thought it wouldn’t be a fair war if Karna fought with the armour on. So one morning, Lord Indra disguised himself as a Brahmin and went to Karna and asked for his kavach (armour) and kundal in donation. Even though Karna was warned by his father that it was Lord Indra, he being a noble man, couldn’t deny the request of a Brahmin and tore them off his body and gave them to Lord Indra. This left him covered in a pool of blood because for him it was almost like tearing away a part of his body but even that could not stop him from doing charity.\r\n\r\nThere is another popular story about Karna that when he was on his death bed, Lord Krishna decided to test him for one last time. Krishna went to Karna in the form of a Brahmin and asked for a donation. Karna, who was in immense pain, said that he had nothing that he could give him at that moment. So he requested the Brahmin to visit his palace and said that there he will get all the food and money that he wanted. To this the Brahmin replied that he was old and travelling so much was not possible for him. After thinking for a while, Karna grabbed a stone from the ground and broke with it a golden tooth that he had and offered it to the Brahmin.\r\n\r\nThe Brahmin was hesitant to accept it because it was covered with blood and saliva. Karna realized this and with great difficulty and a lot of efforts, he shot a divine arrow towards the earth. This made a spring of water to come out of the Earth with the help of which he cleaned the tooth and then gave it to the Brahmin.\r\n\r\nThis sacrifice of Karna and his determination to donate even on his death bed when he was in so much pain pleased Lord Krishna. Krishna showed him his ‘Vishwaroop’ (the eternal form of god in which one can see the entire universe) and thus Karna became the third mortal to see this vision. Krishna also asked Karna to ask for a boon and Karna asked for ‘Moksh’ (release from the cycle of rebirth impelled by the law of karma). This is why even though he sided with adharma his entire life, he is believed to have attained moksh. He was also cremated by Lord Krishna himself.', 1, 'wp5528353.jpg', 1, 0, '2021-07-10'),
(26, 13, 'food', 'Paav Bhaaji', 8, 'When was the last time you ate something at a street vendor’s stall in Mumbai and wondered what the story behind the dish was? I bet, you wouldn’t even have thought about it. In a city that has to offer a wide array of culinary variety, right from a Rs 10  nimbu paani to a Rs 25000 three-course meal, not many seem curious about the history behind the food that they savour on a daily basis. \r\n\r\nMumbai’s street food perhaps has the widest range of delicacies that you can possibly sample in 233 sq. miles of area. It’s a culinary universe packed onto a set of little islands. Holding true to its cosmopolitan reputation, the city’s street food, too, has various identities and avatars. Perhaps the most popular street food dish in Mumbai would be the Pav Bhaji. A spicy, soupy, crunchy mixture of vegetables, pan-fried or  Tawa fried in a unique mixture of spices, served with two or three portions of the city’s famed laadi pavs, soaked in butter and chaat masala – this combination is a delight for any avid foodie. Nowadays, the humble Pav Bhaji, which was often served in stalls or small vendors in humble nooks and corners of the city, has now taken on a national and even an international identity, served with toppings ranging from mozzarella cheese to grated paneer to mushrooms. It has even evolved in some places to become Pav Bhaji pizzas. You name it, and the Pav Bhaji has an avatar ready to match your palate! \r\n\r\nBut there are a very few people who would know about the humble beginnings of this now popular fast food item. In fact, in all probability, Pav Bhaji can be called the first South Asian dish to be associated with the term ‘fast food.’ While many wrongly associate the origins of this dish to Gujarat, it was actually conceived as a necessity by the womenfolk of 19th century Mumbai chawls. The Pav Bhaji’s birth was actually born as a makeshift fix rather than invention. In the late 1800s when Mumbai’s cloth mills started flourishing, they created a huge workforce of labourers who would toil hours in a day. These labourers would often go hungry because they would get very little time for a decent bite, as they were tirelessly working to fulfill the growing demand of Indian cotton in European markets. The workers would leave early and come back late from their respective shifts, leaving their wives with very little time to prep a decent meal to pack for their men. It was out of fulfilling this necessity of ensuring that the man of the house keeps the machines running without going hungry that the street food of today, the Pav Bhaji was born.\r\n\r\nThe woman of the house realized that in order to provide the nutrition on a thin budget, a quick fix was required. A wide range of vegetables, including carrots, potatoes, cabbage, green peas, onions, or whatever else was available in their little chawls would be cooked in a peculiar mix of different powdered spices (which is a staple in Maharashtrian households) and packed for lunch with bhakri – a nutritious flat bread prepared from millet dough, similar to roti but more coarse in texture. Surprisingly, the pav was introduced, much later. The homemaker could then be at peace about the health of the bread-winner of the family while preparing a meal in no time.', 1, '52416693.jpg', 1, 0, '2021-07-10'),
(58, 15, 'insights', 'Yoga', 10, 'Yoga is an ancient art that connects the mind and body. It is an exercise that we perform by balancing the elements of our bodies. In addition, it helps us meditate and relax.\r\n\r\nMoreover, yoga helps us keep control of our bodies as well as mind. It is a great channel for releasing our stress and anxiety. Yoga gained popularity gradually and is now spread in all regions of the world. It unites people in harmony and peace.\r\n\r\nYoga essentially originated in the subcontinent of India. It has been around since ancient times and was performed by yogis. The term yoga has been derived from a Sanskrit word which translates to basically union and discipline.\r\n\r\nIn the earlier days, the followers of Hinduism, Buddhism, and Jainism practiced it. Slowly, it found its way in Western countries. Ever since people from all over the world perform yoga to relax their minds and keep their bodies fit.\r\n\r\nFurthermore, after this popularity of yoga, India became known for yoga worldwide. People all over the world have started to realize the benefits of yoga. Several workshops are held and now there are even professional yogis who teach this ancient practice to people so they can learn about it.\r\n\r\nBenefits of Yoga\r\nYoga has numerous benefits if we look at it closely. You will get relief when you practice it regularly. As it keeps away the ailments from our mind and body. In addition, when we practice several asanas and postures, it strengthens our body and gives us a feeling of well-being and healthiness.\r\n\r\nFurthermore, yoga helps in sharpening our mind and improving our intelligence. We can achieve a higher level of concentration through yoga and also learn how to steady our emotions. It connects us to nature like never before and enhances our social well-being.\r\n\r\nIn addition, you can develop self-discipline and self-awareness from yoga if practiced regularly. You will gain a sense of power once you do it consistently and help you lead a healthy life free from any problems. Anyone can practice yoga no matter what your age is or whichever religion you follow.\r\n\r\n', 1, 'Yoga-for-exercise.jpeg', 1, 0, '2021-07-11'),
(60, 11, 'people', 'Rajasthan-The Royal State of India', 9, 'Rajasthan has had a glorious history. It is known for many brave kings, their deeds; and their interest in art and architecture. Its name means “the land of the rajas”. It was also called Rajputana (the country of the Rajputs), whose codes of chivalry shaped social mores just as their often bitter and protracted feuding dominated their politics. From this same sandy tract the world heard the bangs of India’s nuclear test program—first during the regime of Mrs. Indira Gandhi and, quite recently, when Mr. Atal Behari Vajpayee joined as Prime Minister. The nuclear blast that caused a world-hauling polarisation of leading nations, was made in an insipid belt of Rajasthan known as Pokhran. Also famous for its painted mud Potteries, Pokhran has become the recent sanatorium of India associated with the pride of its people. Such is Rajasthan, the land of Rajput warriors—bold and beauteous, simple and yet difficult, welcoming and yet self-conscious, full of valour and full of romance. In its diversity lie around the Great Indian Desert, mountain ranges, lakes, dense forests, lush green valleys, barren fields and attractive oases. Spread in  a vast stretch of 342,214 sq. km Rajasthan is the largest state of India with a population over 45 million. In most parts the climate\r\n\r\nis dry. The Aravalli mountains stretching southwest across the state separates it into desert and semi-desert areas. The vast desert tract is known to all as Thar Desert. Travelling into Rajasthan is a thrilling experience but more abiding impression is of the people of Rajasthan. They are simple and happy people in spite of all the difficult conditions they are put to face. The dryness and insipidity of their surroundings has taught them the value of colours, which they reflect in their costumes, in their paintings, in their handicraft and even in their thoughts. It is not amazing therefore that Rajasthan has been the birthplace of many noted artists of India including the internationally known Sitar maestro Pt. Ravi Shankar and renowned dancer Uday Shankar. Many people know the story of Padmini, the queen of Chittaur, whose surpassing beauty led Alauddin Khilji, the Sultan of Delhi, to wage a ruthless war. The same beauteous women are also known in history for their “Jauhar”—an act they used to perform to save themselves from falling into impious hands. When their husbands died in the battles and enemies invaded their forts, they would enkindle wood fire and jump into it to join their husbands in the next world. In this same land of sacrifice, men of eminent valour were produced who lived and died for the sake of dignity. Here was born Rana Sanga, the great lion of the medieval India, who was alleged to have lost his one eye, one leg and one arm in the battles and had 80 wound marks on his body. Yet when he would enter the battlefield on his stallion, he would create havoc in the mughal ranks. Created in the Mughal army. And here was born Maharana Pratap of Chitaurgarh who lost his kingdom, suffered extreme hardships and exile with his family members but did not succumb to Akbar, the Mughal emperor, who wanted Chittaur to accept his sovereignty. Being a land of valour and struggle and cradle of so many Rajput kingdoms, almost the whole of Rajasthan seems teeming with palaces, royal monuments and, above all, picturesque forts’ Forts are many and it is difficult for anyone to survey them all as one can find a number of forts even in deep jungles. Some of them, which deserve special attention, are Gagron Fort, Mehrangarh Fort\r\n\r\n', 1, 'detail-of-decorated-gateway-amber-fort-jaipur-rajasthan-india-1918x1080.jpg', 0, 0, '2021-07-11'),
(61, 13, 'insights', 'Dowry System', 6, 'Dowry system is followed in India since a very long time. Our ancestors started this system for valid reasons but now it is leading to issues and problems in society. In this essay on dowry, we will see what dowry exactly is, how it started, and why it should be stopped now.History Of Dowry\r\nDowry system started even before the British period. In those days, society does not use to consider dowry as a “Money” or “Fee” you have to pay to be brides parents.\r\n\r\nThe idea behind the dowry system was, to make sure the bride will be financially stable after getting married. The intentions were very clear. Brides parents used to give money, land, assets to the bride as a “Gift” to make sure their daughter will be happy and independent after marriage.\r\n\r\nBut when British rule came into the picture, they restricted women to own any property. Women were not allowed to buy any property, land or assets. Hence, men started owning all the “Gifts” given to the bride by her parents.\r\n\r\nThis rule changed pure dowry system into a mess! Now parents of the bride were looking at their bride as a source of income. Parents started hating their daughters and wanted only sons. They started demanding money as a dowry. Women were suppressed since they did not have equal rights as men. And since then, grooms parents follow this rule to their advantage.\r\n\r\nWhy the Dowry System Should be Stopped?\r\nThe new dowry system is creating problems in society. Poor parents do not get any groom who will marry their daughter without taking dowry. They have to take “Marriage Loans” to get their daughter married.\r\n\r\nDowry is becoming a nightmare for Women. The cases of infanticide are increasing. Poor parents do not have any other option. They cannot afford to have a girl child, and hence they are intentionally killing infant girl. More than 8000 women are killed because of Dowry!\r\n\r\nIt is very clear that Dowry is creating violence. Groom’s parents are misusing this pure tradition. And they are not aware that they are misusing it, because they are not educated about the traditional dowry system. Everyone is just following the new dowry system blindly.\r\n\r\nDowry is complete injustice with women and does not give women equal status in society. Because of dowry men will always be superior to women. This is creating a mess and negative environment in society.\r\n\r\nUnder the Dowry Prohibition Act, taking or giving dowry is a crime and illegal. If you see someone taking or giving dowry then you can lodge a complaint against them.\r\n\r\n', 1, 'background-bride-bride-and-groom-2060240-768x512.jpg', 3, 0, '2021-07-11'),
(63, 11, 'insights', 'Hello', 4, '<a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\">', 1, 'null.png', 0, 0, '2021-07-17'),
(64, 11, 'insights', 'Heyya', 2, '<a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\">', 1, 'null.png', 0, 0, '2021-07-17'),
(65, 11, 'insights', 'Its there !!', 2, '<a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\"><a href=\"./profile.php?user=<?php echo $user ?>\">vv', 1, 'null.png', 0, 0, '2021-07-17'),
(66, 11, 'people', 'Check post', 2, 'Check postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck postCheck post', 1, 'ab1.jpg', 1, 0, '2021-07-25'),
(68, 18, 'people', 'Jack Ma', 5, 'Jack Ma Yun[a] (Chinese: 马云; [mà y̌n]; born 10 September 1964) is a Chinese business magnate, investor and philanthropist. He is the co-founder and former executive chairman of Alibaba Group, a multinational, technology conglomerate. In addition, he co-founded Yunfeng Capital, a private equity firm. Ma is a strong proponent of an open and market-driven economy.\r\n\r\nIn 2017, Ma was ranked second in the annual \"World\'s 50 Greatest Leaders\" list by Fortune.[3] He has widely been considered as an informal global ambassador for Chinese business, and is an influential figure for the community of startup businesses.[4] In September 2018, he announced that he would retire from Alibaba and pursue educational work, philanthropy, and environmental causes;[5][6][7][8] the following year, Daniel Zhang succeeded him as executive chairman.[9]\r\n\r\nAs of April 2021, with a net worth of $51.5 billion, Ma is the third-wealthiest person in China (after Zhong Shanshan and Ma Huateng), as well as one of the wealthiest people in the world, ranked 26th by Bloomberg Billionaires Index.[2] In 2019, Forbes named Ma in its list of \"Asia\'s 2019 Heroes of Philanthropy\" for his work supporting underprivileged communities in China, Africa, Australia, and the Middle East.[5][10]\r\n\r\nJack Ma was born in Hangzhou, Zhejiang, China. He began studying English at a young age by conversing with English-speakers at Hangzhou International Hotel. For nine years, Ma would ride 27 km (17 miles) on his bicycle to give tourists tours of the area to practice his English. He became pen pals with one of those foreigners, who nicknamed him \"Jack\" because he found it hard to pronounce his Chinese name.[11]\r\n\r\nLater in his youth, Ma struggled attending college. Ma failed the entrance exam for the Hangzhou Teachers College twice as his weak point was mathematics.[12] The Chinese entrance exams, held annually, took Ma three years to pass. Ma attended Hangzhou Teacher\'s Institute (currently known as Hangzhou Normal University) and graduated in 1988 with a Bachelor of Arts in English.[13][14] While at school, Ma was head of the student council.[15] After graduation, he became a lecturer in English and international trade at Hangzhou Dianzi University. He also claims to have applied ten times to Harvard Business School and got rejected each time.[16]\r\n\r\nAccording to Ma\'s autobiographical speech,[17] after graduating from Hangzhou Normal University in 1988, Ma applied for 30 different odd jobs and was rejected by every one. \"I went for a job with the police; they said, \'you\'re no good\'\", Ma told interviewer Charlie Rose. \"I even went to KFC when it came to my city. Twenty-four people went for the job. Twenty-three were accepted. I was the only guy [rejected]...\".[18] During this period, China was in its first decade of Deng Xiaoping\'s Chinese economic reform.\r\n\r\nIn 1994, Ma heard about the Internet and also started his first company,[19] Hangzhou Haibo Translation Agency (杭州海波翻譯社). In early 1995, he went to the US on behalf of the municipal government with colleagues who had helped introduce him to the Internet.[19] Although he found information related to beer from many countries, he was surprised to find none from China. He also tried to search for general information about China and again was surprised to find none. So he and his friend created an \"ugly\" website related to China.[20] He launched the website at 9:40 AM, and by 12:30 PM he had received emails from some Chinese investors wishing to know about him. This was when Ma realized that the Internet had something great to offer. In April 1995, Ma and He Yibing (a computer teacher) opened the first office for China Pages, and Ma started their second company. On 10 May 1995, they registered the domain chinapages.com in the United States. Within three years, the company had made 5,000,000 Renminbi which at the time was equivalent to US$800,000.\r\n\r\n', 1, '330px-Enabling_eCommerce-_Small_Enterprises,_Global_Players_(39008130265)_(cropped).jpg', 2, 0, '2021-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rev_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `comm_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rev_id`, `post_id`, `user_id`, `comment`, `comm_date`) VALUES
(15, 25, 11, 'Nice article !!', '2021-07-10'),
(16, 25, 13, 'Really Insightful !!', '2021-07-10'),
(17, 25, 13, 'hi', '2021-07-10'),
(18, 25, 13, 'hiiii', '2021-07-10'),
(19, 25, 13, 'hii', '2021-07-10'),
(20, 58, 11, 'Informative !!', '2021-07-11'),
(21, 61, 11, 'Ankit has been a victim of this cruel system !! Stay Strong Mate !!', '2021-07-11'),
(24, 66, 11, 'Nice', '2021-07-25'),
(25, 26, 11, 'Nicee', '2021-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `sav_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`sav_id`, `user_id`, `post_id`) VALUES
(26, 13, 25),
(29, 11, 61),
(30, 11, 66),
(31, 18, 68);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subscriber` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user`, `password`, `pic`, `email`, `subscriber`) VALUES
(11, 'Sanskar', 'Sanskar', NULL, 'https://lh3.googleusercontent.com/a/AATXAJzv2poALW1jIy2t5-YbOkn1sidzWjtUKY78H1Ve=s96-c', 'sanskaragarwal1@gmail.com', 0),
(12, 'admin', 'admin', 'admin', 'null.png', 'admin@gmail.com', 0),
(13, 'Ankit', 'Ankit', 'ankit', 'prof.jpeg', 'ankit@gmail.com', 0),
(14, 'Rahul', 'Rahul', 'rahul', 'null.png', 'rahul@gmail.com', 0),
(15, 'Shiva', 'Shiva', 'shiva', '09_aryan_khanna_imm_indian_male_models_blog.jpg', 'shiva@gmail.com', 0),
(16, 'Sams', 'Samriddhi', 'sams', '0308dcdf-9c66-4dec-b007-c431335a7933.jpg', 'samriddhi.dwivedi@gmail.com', 0),
(17, 'SANSKAR AGARWAL', 'SANSKAR AGARWAL', NULL, 'https://lh3.googleusercontent.com/a/AATXAJxM_VAj2JVOllNFQbk15bYpycE-3YOIAJsAuyzU=s96-c', 'sanskar.agarwal2019@vitstudent.ac.in', 0),
(18, 'Samriddhi07', 'Samriddhi', 'sams', 'null.png', 'samriddhi.dwivedi@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rev_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`sav_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `sav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `saved`
--
ALTER TABLE `saved`
  ADD CONSTRAINT `saved_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `saved_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
