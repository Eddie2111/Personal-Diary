-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 05:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) NOT NULL,
  `title` varchar(60) NOT NULL,
  `data` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `data`, `date`) VALUES
(18, 'Successful on creating and deleting post', 'Got a hold of first, second and last operation of CRUD. Only update/edit remaining.', '2022-02-25 00:00:00'),
(20, 'Successful on creating and deleting post [continued]', 'The app has lesser scalability. The inputs arent that much good in handling, has to be provided strict input which is bad. Need to work on the dates and story box of post.php', '2022-02-25 00:00:00'),
(22, 'Everyone is busy.', 'Truth be told, nobody is busy. Everyone has priority, thats certainly not you. My problem is that, I lost track since when they started to ignore me. I dont know any particular reason or too afraid to think. Maybe its someone who is spreading rumours?  Another fact is, I am not actually alone or something. Its just that my girlfriend is ignoring me completely. I have shifted very bottom from her priority list. Others who ignore me are just my female friends. Who the fuck gives a shit to them right? All they want is assignment and help in the exam. What more do I get from them instead of some bullshit talks?  I shouldnt be feeling this low for people who has minimum or no successful future at all. ', '2022-02-25 00:00:00'),
(24, 'A lot of stuff left to read', 'damn, I have so much left to read that I am terrified to start studying again. I am really afraid of that CSE340. Thats no bullshit, I completed the assignment but I dont think it will be counted. They wont even allow late submission, till now I mean. TBH, I have no idea what my grades would be, all I can guess is that it would be around 3 again. I hate my grades.', '2022-02-25 00:00:00'),
(25, 'I see through people', 'People however, trying their best to cope up with the new world. They are surrounded in their own created world and suffering for their existence. This is however human life is, according to buddha, human life is suffering., and they are the gunea pig of their own lives.  People do anything for validation. They are uploading the pictures wherever they go, whatever they do. Even the kids are also struggling to make an existence. Nonetheless however, the kids are pretty fine with whatever thrown at them. The young adults however, are struggling, its their face, their eyes are telling so. The world has been so extremely confined that you cannot remove your virtual exitence and live in peace. Virtual footprint is locking every single human up. There is no escape?', '2022-02-25 00:00:00'),
(26, 'She started calling', 'Yeah, its my girlfriend again, she is calling on messenger, sending videos and pictures. Behaving like nothing happened. I am hurt. Everytime I get close, she goes far away. So, no getting close to her, sorry. I dont have a good priority in her life, why should I go to her then? She says everytime she reaches out for me, she actually does, but when I need her, she is never there. States that I behave like a 8 year old kid. I also have stresses, thats why I had her. Seem like she is all for beauty, not for mental support or physical. I guess my ex was too better, I lost a gem, I lost her, I miss her.', '2022-02-25 00:00:00'),
(27, 'I took vaccine today', 'Heading says pretty much it. Had an eexam and an assignment. Went out after the exam, smoked two advance, I am becoming a chain smoker I guess, but who cares right? You know whats funny? Akbar s girlfriend, she is ugly af, I imitate her ugly face everytime I see her. His behavior states that its his first girlfriend after he was born. Lmao short nigga ugly guy gets gets girl, born for each other. And here I was, all alone, rotten in my room due to the booster, what the fuck I was thinking before roasting them? If anyone is a loser, thats me, nobody else. I dont miss my friends right now. Sign of great improvement yeah?', '2022-02-27 00:00:00'),
(28, 'Another test post on Bengali', 'বাংলা একটা কঠিন ইউনি কোডেড ভাষা কারন আমি অভ্র ব্যবহার করি। অভ্র নিতে পারে কিনা সেটারই টেস্ট।', '2022-02-27 00:00:00'),
(30, 'The hell is wrong with you?', 'As the title says, what the fuck is wrong with you? Why arent you completing assignments on time? Better make a todo list in here, DO NOT FUCKING RUIN YOUR GRADES [AGAIN]', '2022-02-28 00:00:00'),
(33, 'Why do people ignore me?', 'My older friends are ignoring me at a great extent including my girlfriend. Of course, all of them are same. What the hell do they want? Why do they ignore me? Is there something wrong with me? Why arent they responding at all? Why arent they even explaining whats wrong with me? Oh yes my so called bestu is so much into ignoring me. I dont even know what I have done wrong. and my gf, what a person, doesnt even have a minute time to send a message. I am so tired of being lonely af. I am at my weak state now. I might fall in love if someone gives me proper attention. One thins for sure, I need to control my sexuality. Its so wrong that, I dont know. I need to control myself. I hate to be lonely. I hate myself.', '2022-03-10 00:00:00'),
(34, 'Being alone', 'Being alone sucks. I hate being alone. How can a person live being alone? I am taking too long to adjust being alone. I guess I had to adjust myself just after afrin left me. Now I understand her pain. Sometimes all I think about is her. I miss her. and I still love her. She was and still is the person I would do anything for. Its hard living without her. She took a great care of me, forced me to sleep, have a great health, to take food and all. She was like an ideal wife to me. Her parents raised her well. Yeah she cheated and I am the loser, but I should have accepted her when she was requesting me to repair everything on our last meet. I did not because I chose tamim, abida and tamzid. Now I regret my decision so much. I wish and pray that she come back to me again and wherever she is right now, I hope she is alright.', '2022-03-10 00:00:00'),
(35, 'Maam wished me!', 'Yes, Abed maam wished me, she is such a sweet heart, I have a very big crush on her, I know she doesnt know about it, I wont tell it cause just face it, what if she cases againt me lol right? I feel, happy, very happy, that grin face put a smile on my face. I am happy. Some guy wishing his best friend happy birthday. Humanity is great. I am happy!', '2022-03-11 00:00:00'),
(36, 'Remember not to read too much!', 'Hi, this is to notify you that you should not read the messages too much. It causes severe mental damage. Dump all your inner words here, it will keep you cool and focused on your track. ', '2022-03-11 00:00:00'),
(39, 'I have been analyzing nodejs market recently', 'Nodejs jobs are pretty available around everywhere. 5-6 big projects with all the industrial applications and ace the interview, you are done for. Not that hard. I must try for another job again or it will be too late. Got thesis supervisor and need to start running again. I need to focus on my study now. I guess no working for a year and a half (if I can). I need to learn NodeJS throughly. Getting and Sending data to database, sessioning, JWT, OAuth, these are my key targets now. Then I will focus on AWS and Amazon services. I dont think I am right on track.', '2022-03-15 00:00:00'),
(40, 'old days were....good', 'Hi, this is depressed me again. I was watching my older pictures and the comments associated with those. I seem to be very very very happy at that time. I had a good girlfriend, has some good best friends, peace and everything I could ask for. Now look at me, lonlier than ever, sitting in front of my desk, pressing buttons of the keyboard, wishing something would come out of nothing. Nothing tends to work now.  I miss Tamim, I really miss her. Its been so long I am living without her. She has removed her entity from my life. It doesnt pain me that she doesnt exist in my life, it pains that she exists in real life and I am the only who cannot get her. Living people hurt more than dead people. At least lonliness doesnt get any better. ', '2022-03-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
