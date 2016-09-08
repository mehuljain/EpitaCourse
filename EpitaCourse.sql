-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2016 at 01:20 PM
-- Server version: 5.5.49-0ubuntu0.12.04.1
-- PHP Version: 5.5.36-1+donate.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `EpitaCourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `teachingunit` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `coursecode` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `atthours` double NOT NULL,
  `program` int(11) NOT NULL,
  `ectscredits` double NOT NULL,
  `specialization` int(11) NOT NULL,
  `prerequistes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `learningoutcomes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `courseoverview` longtext COLLATE utf8_unicode_ci NOT NULL,
  `listoftopics` longtext COLLATE utf8_unicode_ci NOT NULL,
  `assessmentscheme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `recommendedlearningresources` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `teachingunit`, `coursecode`, `atthours`, `program`, `ectscredits`, `specialization`, `prerequistes`, `learningoutcomes`, `courseoverview`, `listoftopics`, `assessmentscheme`, `recommendedlearningresources`) VALUES
(4, 'Digital Forensics and Incidence Response', 'Advanced Security', '_A_TROUVER', 12, 3, 2, 12, 'none', 'none', 'none', 'none', 'none', 'none'),
(5, 'Malware Analysis', 'Advanced Security', '_A_TROUVER', 12, 3, 2, 12, '', '', '', '', '', ''),
(6, 'Advanced C', 'Advanced Programming', '_A_TROUVER', 21, 2, 3, 10, 'Knowledge of structured programming', 'separate the part of code specific to a given task from the reusable part,\r\ndesign reusable (generic) code,\r\nlearn how to cope with exceptional situations and side-effects', 'The goal of this course is to draw the attention of the students on the notion of *quality* of the code. This includes documenting the code, taking side-effects and exceptional situations into account, structuring it towards reusability, and learning how to write generic code.', 'main syntactic constructs in C language\r\n- program structure, public and private information\r\n- the importance of a return status\r\n- generic pointers and pointers to functions', '1. Class attendance and participation [potential bonus]\r\n2. Project [50 %]\r\n3. Final Exam [50 %]\r\nfinal score = (P+E)/2 + bonus', 'Algorithms in C, Parts 1-4: Fundamentals, Data Structures, Sorting, Searching, 3/E - Sedgewick ©1998  |  Addison-Wesley Professional  \r\n\r\nIntroduction to the Design and Analysis of Algorithms, 3/E - Anany Levitin, Villanova University ©2012 • Addison-Wesley\r\n\r\nAdvanced C Programming by Example - John W. Perry, Pws Pub Co; 1st edition (January 14, 1998) ISBN-13: 978-0534951405'),
(7, 'C language introduction', 'Technical Skills harmonization', '_A_TROUVER', 18, 1, 2, 6, '', '', '', '', '', ''),
(8, 'Advanced Algorithmic', 'Harmonization General Science', 'INF_403_ALGM', 21, 3, 2, 2, 'none', 'mathematically determine the order of magnitude of the complexity of an algorithm\r\n- know the pros and conses of all major data structures\r\n- choose the most accurate data structure to implement an algorithm', 'The main goal is to understand why proving that an algorithm terminates is not enough: one has to prove that it terminates within a given, reasonable delay. Students learn to associate to an algorithm one of the main classes of complexity and to determine the needed time for the algorithm to complete, *before* coding it. They also learn how to choose the best data structure for the problem they are faced with.', 'mathematical tools (limits, sequences, Landau notation)\r\n- abstract data types\r\n- linear data structures\r\n- trees, binary trees, balanced trees\r\n- hashing techniques', '1. Class attendance and participation [potential bonus]\r\n2. Intermediate Exam (IE)\r\n3. Final Exam (FE)\r\nfinal score = max(FE,(FE+IE)/2) + bonus', 'http://www.amazon.com/Introduction-Algorithms-International-Thomas-Cormen/dp/0262533057/ref=la_B000AQ24AS_1_1?s=books&ie=UTF8&qid=1400663988&sr=1-1\r\n\r\nhttp://www.amazon.com/Introduction-Analysis-Algorithms-2nd/dp/032190575X/ref=sr_1_sc_3?s=books&ie=UTF8&qid=1400664036&sr=1-3-spell&keywords=sedgewic'),
(9, 'Advanced Databases', 'Advanced Programming', '_A_TROUVER', 18, 2, 3, 10, 'Procedural and object language knowledge', 'HTML, PHP, Javascript, Ajax, jQuery, SQL, Compound Statement, Wordpress\nData modeling\nConcurrency model\nMySQL ', 'The data modeling,The MySQL database kernel,The standard SQL, The SQL and the Compound Statement specific to MySQL', 'HTML, PHP, Javascript, Ajax, jQuery, SQL, Compound Statement, Wordpress\nData modeling\nConcurrency model\nMySQL', 'Class attendance and participation:30 %\nPractice in class: 20%\nProject: 50%\n(I evaluate each student depending of their own efforts)', 'http://www.php.net/manual/en/\nhttp://www.w3schools.com/jsref/\nhttp://api.jquery.com\nhttp://codex.wordpress.org\nMySQL Documentation found on http://dev.mysql.com/doc/refman/5.0/en/'),
(10, 'Databases', 'Technical Skills harmonization', '_A_TROUVER', 12, 3, 1, 2, '', '', '', '', '', ''),
(11, 'Advanced Web Development', 'Advanced Programming', 'INF_524_AWDEV', 24, 3, 3, 9, '', '', 'Be able to develop with the main WEB languages: HTML, PHP, Javascript, Ajax, jQuery\nKnowing the plugin development basics for Wordpress CMS', 'HTML, PHP, Javascript, Ajax, jQuery, SQL, Compound Statement, Wordpress\nData modeling\nConcurrency model\nMySQL', 'Class attendance and participation:30 %\nPractice in class: 20%\nProject: 50%\n(I evaluate each student depending of their own efforts)', 'http://www.php.net/manual/en/\nhttp://www.w3schools.com/jsref/\nhttp://api.jquery.com\nhttp://codex.wordpress.org\nMySQL Documentation found on http://dev.mysql.com/doc/refman/5.0/en/'),
(12, 'Network Security', 'Advanced Security', 'NET_523_NSEC', 20, 3, 3, 12, 'To have followed the course Networking Technologies', 'to design, install, operate, secure and maintain networks in small-to-medium businesses, as                 well as enterprise and service provider environments.', 'The course provides knowledge of advanced network architecture and network security in particular the study of advanced network protocols.', 'The course focuses on intermediate routing protocols (OSPF, EIGRP), access control lists (ACLs), configuration of switches, Ethernet switching, Virtual LANs (VLANs), Spanning Tree Protocol (STP), Rapid Spanning Tree Protocol (RSTP), and VLAN Trunking Protocol (VTP). The second part of the course is dedicated to advanced IP addressing techniques (NAT: Network Address Translation and DHCP). The last part provides guidelines about the activities to be carried out and the resources to be used to secure an organization''s network (VPN – MPLS – Ipsec).', 'Final exam: 100%\nExam lab allows the professor to evaluate the degree of knowledge and comprehension of each individual student.\nExam lab is an individual exam during which each student has to realise a specific network and put in \npractice what he has learned during the previous challenging labs. ', 'CCNA 200-120 – Exam Certification Library – Cisco press\nNetworks, Andrew Tanenbaum, Pearson Education\nNetwork Security Bible, Eric Cole, Ed. 2009, Wiley Publishing Inc.'),
(13, 'Digital Risks and Network Architecture', 'Technical Skills', 'INF_466_DRNA', 12, 3, 1, 2, '', 'How cybersecurity fits in a global enterprise risk management framework\nHow to properly cover the risk assessment equation''s attributes\nHow to assess Risk in digital ecosystems\nHow to act upon an identified risk', 'Understanding the founding equation of Risk:\n"A Risk is constituted whenever a threat agent (whether human, natural or automated) circumvents \nalready implemented security measures and successfully exploits a given vulnerability on a \nbusiness asset (critical data, personal data, ...)."', 'Business Impact Analysis\nRisk Management\nRisk Assessment\nRisk Mitigation\nRisk Transfer\nRisk Annulment', '1. Class attendance and participation [10 %], \n2. Group Project and Presentation [20 %], \n3. Assignments [20 %]\n4. Project [25 %], \n5. Final Exam [25 %]', 'Digital Security Risk Management\nhttp://www.oecd.org/sti/ieconomy/digital-security-risk-management.pdf'),
(14, 'Data Flow and Computer Networks', 'Networks and System Harmonization', 'INF_467_DFCN', 18, 3, 1, 2, '', 'Learn how to model business processes and interpret them\nHow to obtain clarity on data flows\nIdentify and classify sensitive data in data flows\nIdentify involved stakeholders and interdependencies\nHow to integrate security needs all along the data flow\nHow to securely design an IT network', 'If you don’t understand and see your data flows, you can neither have a secure by design network architecture, nor classify data, nor identify data sets that are subject to specific legal or contractual requirements. This course is your passport to the Executive Committee whenever you need to gain support and sponsorship for your cybersecurity initiatives. Without the appropriate language, stakeholders will be lost in translation.', 'Business Process Modeling\nData Flow\nNetwork Design\nData Classification\nBusiness Impact Analysis', '1. Class attendance and participation [10 %], \n2. Group Project and Presentation [20 %], \n3. Assignments [20 %]\n4. Project [25 %], \n5. Final Exam [25 %]', 'http://brsilver.com/\nhttp://obashi.co.uk/\nhttp://www.sekimia.com'),
(15, 'Virtualization Technologies', 'Security & Management', '_A_TROUVER', 12, 3, 2, 12, 'NA', '- understand the use cases for virtualisation and the economic benefits derived\n- understand the technological specifics of different types of virtualisation architectures\n- have a basic understanding of the ecosystem surrounding virtualisation solutions\n- virtualization in the cloud', 'Virtualization Technologies is a course designed to give the broad strokes concerning the use of virtualisation in the modern enterprise. The course addresses the various products in wide use as well as a tour of the niche players ', 'Virtualization: fundamentals, benefits and limits\nThe marketplace & its evolution\nThe major players : VMware, Xen/Citrix, Microsoft\nRelated technologies\n- networking\n- storage\n- migration tools\n- backups\n- disaster recovery\nVirtualisation project methodology\nCloud services based on virtualisation', '1. Test 1 [30%]\n2. Final Exam [70%]', 'CCNA 200-120 – Exam Certification Library – Cisco press\nNetworks, Andrew Tanenbaum, Pearson Education\nNetwork Security Bible, Eric Cole, Ed. 2009, Wiley Publishing Inc.'),
(16, 'Virtualization Technologies', 'Security & Management', '_A_TROUVER', 12, 3, 2, 12, 'NA', '- understand the use cases for virtualisation and the economic benefits derived\n- understand the technological specifics of different types of virtualisation architectures\n- have a basic understanding of the ecosystem surrounding virtualisation solutions\n- virtualization in the cloud', 'Virtualization Technologies is a course designed to give the broad strokes concerning the use of virtualisation in the modern enterprise. The course addresses the various products in wide use as well as a tour of the niche players ', 'Virtualization: fundamentals, benefits and limits\nThe marketplace & its evolution\nThe major players : VMware, Xen/Citrix, Microsoft\nRelated technologies\n- networking\n- storage\n- migration tools\n- backups\n- disaster recovery\nVirtualisation project methodology\nCloud services based on virtualisation', '1. Test 1 [30%]\n2. Final Exam [70%]', 'http://www.vmware.com\nhttp://microsoft.com/hyper-v\nhttp://www.citrix.com/products/xenserver.html\nhttp://hol.vmware.com'),
(17, 'Web Security', 'Advanced Security', 'NET_519_WESE', 15, 3, 1, 12, 'TCP/IP, Web basics', 'Understanding major security vulnerabilities associated with web technologies\nExploiting and Fixing those vulnerabilities\nDeploying a state-of-the-art SSL/TLS configuration on a web server', 'The course is about client side and server side security concepts in web technologies. Classical vulnerabilties such as XSS, SQL injection, File inclusion will be explained and tested during a lab session. SSL/TLS deployment will also be explained with practical assignments.', 'Javascript code, Client data filtering, PHP code, SSL/TLS configuration, Web server configuration, Cryptography', 'Assignments will count toward 50% of the mark, a written report of the practical session for another 50%.', 'OWASP Web security website: white papers, tools, recommandations, top10s.'),
(18, 'Software & Database Security', 'Advanced Programming', 'INF_512_SOSE', 12, 3, 1, 9, 'C language, TCP/IP', 'Understand security alerts about software vulnerabilities\nLearn how to detect, fix and exploit simple buffer overflows\nUnderstand how modern mitigation is implemented in OSes', 'The course is about security concepts in system programming, bug exploitation and mitigation.', 'Security fundamentals\n                              Vulnerability classification Function calling conventions Buffer Overflows\n                             DEP, ASLR, Sandboxing mechanisms.', 'Assignments will count toward 50% of the mark, a written report of the practical session for another 50%.', 'Smashing the stack for fun and profit (Aleph One)'),
(19, 'Business & Technical Writing', 'Business Exposure', 'MET_400_BUWI', 12, 3, 1, 2, 'TOEIC >= 750', 'The class is designed as a boot-camp with a unique objective: \n            to help students gain in efficiency and conciseness when communicating.  \nStudents are confronted to various business situations and must evaluate/improve the proposed solution.  \nThe situations analyzed involve dealing with: \nthe hierarchy, clients, suppliers, subordinates, colleagues, team members, etc.', 'This class is a journey towards saving time and energy in writing reports, memos and power point presentations.', 'The class is taught in English, and prepares students to face business situations such as:\n-Asking the hierarchy to hire a new team member\n-Introducing the conclusions of an offical report\n-Writing technical specifications\n-Designing email campaigns\n-Structuring web pages\n-Building Power Point presentations that free the speaker’s mind and time.', 'Weight: 30% - 2 individual quizzes\nWeigth: 30% - 1 Group Power Point Presentation\nWeight: 40% - 1 individual Final Exam', 'Kitty O. Locker’s: \nBusiness Communication, Management, and Success'),
(20, 'Marketing Systems', 'Business Exposure', 'MAR_408_MKGR', 12, 3, 1, 5, 'NA', 'Students will earn techniques to help:\n-Define and represent a market, as well as segment that market\n-Select the target segment(s) and develop a Value Proposition\n-Define the corresponding Marketing Program to deliver the Value Proposition\n-Map out the corresponding Value Chain ', 'Marketing is often defined as identifying who to sell to, and what to sell.  \nThe course will approach marketing as a marketing framework for setting up an activity. \nThe framework is designed to help students translate an idea into a product that looks appealing to the potential customer. \nThis means making decisions about what the product will do and look like… As well as decisions about the price point for that product, and where it will be sold, and how it will be promoted.  \nThe course will nonetheless start by \nfocusing on the market and more precisely the group of customers, who are the most in need for that product.', '-Markets, segmentation and targeting\n-Positioning, differentiation and value proposition\n-Marketing Mix or the 4Ps\n-Value Chain', '1. Weight: 45% - 3 individual quizzes\n2. Weight: 55% - 1 Final Exam', 'Marketing Management – McGraw and Hill International Edition - Mullins, Walker, Boyd\nhttp://www.wsj.com/europe'),
(25, 'Cultural Integration Workshop', 'Cultural Integration', '_A_TROUVER', 0, 3, 1, 2, '', '', '', '', '', ''),
(26, 'Project for Research & Innovation (#1)', 'Advanced  Management & Engineering Science', 'INF_465_P_RI1', 26, 3, 2, 5, '', '', '', '', '', ''),
(27, 'Project for Research & Innovation (#2)', 'Business Exposure', '_A_TROUVER', 135, 3, 6, 7, '', '', '', '', '', ''),
(28, 'Business Week', 'Business Exposure', 'FIN_504_BIWI', 21, 1, 2, 5, '', '', '', '', '', ''),
(29, 'C & Unix Programming - Piscine', 'Technical Skills harmonization', 'INF_301_CUNI', 30, 1, 2, 6, '', '', '', '', '', ''),
(30, 'Getting over the culture shock and going beyond national stereotypes.', 'Cultural Integration', 'HUM_404_FLE3', 12, 3, 1, 2, 'NA', '1) Adaption process to a new culture\n2) What is a culture?', 'At the end of the workshop (six classes of 2 hours each), participants will know more about how to adapt to living in France.\nWe will focus on what can make communication difficult with locals in a host country, including emotions related to culture shock and national stereotypes.\nWe also will focus on some caracteristics of the French culture.', 'Contents of “Getting over the Culture Shock” *:\n1) Getting familiar with “culture shock” (nature, symptoms, duration)\n2) Discovering how to adapt to a foreign culture (phases of the adjustment period)\n3) Thinking about strategies on adapting to life in France\n\nContents of “Going beyond national stereotypes”:\n1) Seeing the impact of a prejudice on communication\n2) Discovering what French people usually think about the student’s native culture\n3) Tips to go beyong these stereotypes', 'No exam for this course.', 'N/A'),
(31, 'Project management (#1)', 'Business Exposure', 'MET_417_PMA', 24, 3, 3, 2, '1) Fairly good knowledge of the English language, in order for the students to understand the lectures, case studies, exam questions and course material, as well as to write and present assignments and examination papers. \r\n2) No particular technical prerequisites, but some degree of understanding of what software/website design and development involve will help the students relate to the subject matter and practical examples.', 'understand…\r\n\r\n> the fundamental principles to apply and basic rules to follow in order to efficiently manage the entire life cycle, from an initial idea to its concrete realization, of a software application or website development project;\r\n\r\n> the role of a project manager;\r\n\r\n> how to prepare, plan, organize and supervise a project.', 'The course explains what a project and project management consist of. It describes the functions of a project manager, as well as the fundamental principles and basic rules of project management. Many of these principles and rules apply to any kind of project, but the focus of the course is on projects concerning the creation and publishing of software, including multimedia applications and websites.\r\n\r\nThe course is intended for future project managers, junior project managers, and, more generally, for anyone who needs to understand and deal with project management.\r\nIt addresses not only the technical aspects of projects but also factors to be taken into consideration such as business models, human resources, suppliers, contracts, communication, the relationship with Marketing & Sales, Finance, Legal...\r\nIt covers all facets of the role of a project manager as well as many of those of a product manager. It also addresses aspects of management in general.', 'The course, which is illustrated by real-life examples, is divided into 15 90-min. lectures, as follows:\r\n\r\n1) Introduction - Project Management areas - Functions of a Project Manager\r\n\r\n2) Project life cycle - Product life cycle - Factors of influence on product life - Describing a product (4Ps)\r\n\r\n3) P&L - Project charter\r\n\r\n4) Requirements specification - Project planning: overview\r\n\r\n5) Project planning: WBS, network diagram, tasks, resources, scheduling\r\n\r\n6) Project planning: cost & budget, human resources, procurement, quality\r\n\r\n7) Project planning assignment presentation - Demo of MS Project\r\n\r\n8) Project planning: communications, risks - Reminder of assignment instructions - Project team (part 1)\r\n\r\n9) Assignment solution presentation & discussion - Project team (part 2)\r\n\r\n10) Project team (part 3) - Contractors & contracts\r\n\r\n11) Development life cycle models and methodologies - Design specifications\r\n\r\n12) Content creation - Development & Developers - Testing (part 1)\r\n\r\n13) Testing (part 2) - Project direction/supervision\r\n\r\n14) Relationship with Marketing & Sales - Project success factors - Highlights of PM course + General Q&A\r\n\r\n15) Project Management quiz solution presentation & discussion + Localization case study', '1) Case study & individual project planning assignment (using MS Project) [50%]\r\n\r\n2) Final exam (quiz) covering most key parts of the course [50%]', '> Project Management Guide, related presentations and complementary material downloadable from http://neil.minkley.fr/epita/\r\n\r\n> Other material accessible via links provided on http://neil.minkley.fr/pmlinks/'),
(32, 'Business Intelligence (BI) & Data Warehouses', 'Entreprise Information Systems', 'SIB_504_BIDWM', 15, 3, 1, 4, 'NA', 'At the end of the course students should be able to :\n•Distinguish between data, information, knowledge, intelligence  and wisdom and evaluate the impact of big data and the cloud\n•Design the informational flow in processes, \n•Use business intelligence to  provides competitive advantage to a company, \n•Propose the organisation of data sharing and use in a firm, \n•Set up the business intelligence unit throughout a firm and do benchmarking outside the firm (Veille). \n•Master the tools for intelligent collecting, storing, sharing and extracting information from Internet\n•Situate the role of information technologies in business information systems\n•Understand the barriers and corporate cultural acceptance, to change in firms as success/failure factors for business intelligence', 'It can safely be said today that the greatest capital value of a company is its knowledge. It is sometimes referred to as intellectual capital when accountants wish to evaluate the worth of a company - the Society of Management Accountants of Canada (SMAC) notes that “In balance sheet terms, intellectual assets are those knowledge-based items, which the company owns which will produce a future stream of benefits for the company” (SMAC 1998). However if most researchers agree that knowledge forms around 80% of the value of  a company there is also agreement on the fact that, at best, only some 20% of that knowledge is correctly managed.\nRather than plunging into theory the course aims at understanding what business intelligence is, where it is found and how many try to manage it. The course will look at the close links between business intelligence  and other aspects of management and case studies and examples will be taken from these fields.', '4 - Course Structure\n4. 1 Data, information, knowledge in firms. The growing “size” of information \nHow much? - case study from information for customer segmentation for filling hypermarket shelves\nToo much? - case study of firms displacement in USA with KM in Georgia Power\nHow new and how useful  is Information in new social technologies?\nDisinformation and representations of information.\n4. 2 Processes for business intelligence.\n4. 3 Examples in supply chain management\n4. 5 Case studies of needs and planning in Alcatel, SETEC and companies.\n4. 6 Tools for business intelligence\n4. 7 Setting up business intelligence units in a company – barriers and enabling factors\n4. 7 Business Intelligence and  benchmarking.', 'Evaluation will be based on : \nattendance, punctuality and participation in courses 20%\n•Case study in groups  as class work40% \n•Industrial business intelligence report40%', 'BUSINESS INTELLIGENCE BIBLIOGRAPHY\nLearning To Fly - Practical Lessons From One Of The Worlds Leading Knowledge Companies, Geoff Parcell,  Capstone, 01/02/2004\nThe Circle, Dave Eggers, Publisher: Vintage Books (April 22, 2014), ISBN-10: 0345807294, ISBN-13: 978-0345807298\nThe Zero Marginal Cost Society: The internet of things, the collaborative commons, and the eclipse of capitalism, Jeremy Rifkin, Palgrave Macmillan, ISBN 978-1-137-27846-3\nMIS Quaterly Volume 36, Number 4 — December 2012, Special Issue: Business Intelligence Research, Business Intelligence and Analytics: From Big Data to Big Impact , Hsinchun Chen, Roger H. L. Chiang, and Veda C. Storey (pp. 1165-1188)\nWEB SITES\nhttp://bigdatauniversity.com/\nhttp://www.knowledge-management-online.com/\nhttp://lucasmcdonnell.com/essential-knowledge-management-sites-and-blogs/\nhttp://www.journaldunet.com/solutions/emploi/dossier/0504km/sommaire.shtml\nhttp://km.brint.com/'),
(33, 'Geomarketing & Geographic Information Systems', 'Entreprise, Leadership  & Global IT', 'SIB_411_GEOMA', 12, 1, 1, 3, 'NA', 'Learning outcomes – Students at the end of the course should be able to:-\nunderstand how huge amounts of data are providing competitive advantage for firms in all sectors\nanalyse market potential and segmentation\nbuild operational business plans for GIS applications', 'There is no limit to the amount of data that can be linked to each point, line or polygon on a numerical map. Input comes from a fast growing number of sources that are aiming at providing the best possible understanding of a situation or issue, detecting trends, opportunities, forming predictions and planning strategies. Data mining, social media, spatial microsimulation, forming indicators, modelling and comparing optimal responses are some of the tools for estimating responsiveness performance, effects of neighbourhood characteristics, retail markets or tracking cellular telephones amongst others. Indeed practically all human economic activity il geo-localised. There are however growing concerns on the pertinance, extent of coverage, choice of data and attacks on private data leading to interpretations which bring up ethical issues. \nGIS, now linked into Big Data is probably the most powerful tool today for analytics as all results are easily available for automatic visualisation. Geomarketing is coming out as a vital tool which links into the whole set of enterprise tools managing data today. ', 'Structures and working of GIS\nMarket segmentations and GIS\nVisualisation of data bases\nBig Data and GIS', 'Presence, Participation activity in classroom   20%\nTeam Project work  40%\nIndividual work  40%', 'GEOMARKETING\n1Geomarketing: Methods and Strategies in Spatial Marketing (Geographical Information Systems Series (ISTE-GIS)), Gerard Cliquet, (Editor)   Publisher: Wiley-Blackwell (7 Feb 2006), Language English, ISBN-10: 190520907X , ISBN-13: 978-1905209071\nMeasuring Up: The Business Case for GIS Christopher Thomas Jou (Author), Milton Ospina (Author) , Paperback: 200 pages, Publisher: ESRI Press (September 1, 2004), Language: English,  ISBN-10: 1589480880, ISBN-13: 978-1589480889\nThe Business Benefits of GIS: An ROI Approach, David Maguire (Author), Victoria Kouyoumijan (Author), Ross Smith (Author), Paperback: 243 pages, Publisher: ESRI Press (August 1, 2008), Language: English, ISBN-10: 158948200X, ISBN-13: 978-1589482005\nThinking About GIS: Geographic Information System Planning for Managers, Roger Tomlinson (Author), Paperback: 256 pages, Publisher: ESRI Press; Fourth Edition, New edition edition (April 1, 2011), Language: English, ISBN-10: 1589482735, ISBN-13: 978-1589482739\nMarketing\nMarketing Plans: How to Prepare Them, How to Use Them, Professor Malcolm McDonald (Author), Hugh Wilson (Author), Paperback: 580 pages, Publisher: John Wiley & Sons; 7th Edition edition (18 Feb 2011), Language English, ISBN-10: 0470669977, ISBN-13: 978-0470669976\nConsumer Behaviour, Martin M Evans (Author), Gordon Foxall (Author), Ahmad Jamal (Author), 576 pages,  Publisher: John Wiley & Sons; 2nd Edition edition (31 Mar 2009), Language English,  ISBN-10: 0470994657, ISBN-13: 978-0470994658\nPrinciples of Marketing: European Edition (Pie), Philip Kotler (Author), Prof Veronica Wong (Author), Prof John Saunders (Author), Gary Armstrong (Author), Paperback: 992 pages,  Publisher: Financial Times/ Prentice Hall; 4 edition (30 Nov 2004), Language English, ISBN-10: 0273684566 , ISBN-13: 978-0273684565\nThe Power of Place: Advanced Customer and Location Analytics for Market Planning, Keith Peterson (Editor), Hardcover: 231 pages, Publisher: Integras (June 2004), Language: English,   ISBN-10: 0975405209, ISBN-13: 978-0975405208\nData & Segmentation\n2Data Mining Techniques in CRM: Inside Customer Segmentation, Konstantinos Tsiptsis (Author), Antonios Chorianopoulos (Author), Hardcover: 372 pages, Publisher: Wiley-Blackwell (15 Jan 2010), Language English, ISBN-10: 0470743972, ISBN-13: 978-0470743973\nMarket Segmentation: How to Do it, How to Profit from it, Malcolm McDonald (Author), Ian Dunbar (Author), Paperback: 512 pages, Publisher: Goodfellow Publishers Limited; 4th Revised edition (29 Jun 2010), Language English, ISBN-10: 1906884188, ISBN-13: 978-1906884185\nHandbook of Market Segmentation: Strategic Targeting for Business and Technology Firms, Third Edition, Art Weinstein (Author), Paperback: 266 pages,   Publisher: Routledge; 3rd edition edition (20 April 2004), Language English, ISBN-10: 0789021579, ISBN-13: 978-0789021571\n\nhttp://www.gfk-geomarketing.com/geomarketing/glossary.htm\nhttp://gislounge.com/\nhttp://www.gisdevelopment.net/tutorials/tuman003.htmEA40'),
(34, 'Supply Chain Management (SCM)', 'Entreprise Information Systems', 'MAN_507_SCMA', 12, 3, 1, 4, 'NA', '- understand the basic concepts of supply chain management\n- have a global view of how these concepts are applied in various manufacturing or service contexts, operating in various strategies (continuous, batch, intermittent, job shop, project...)\n- make the distinction between supply (what is required to be able to operate) and demand (how to meet requirements, and deliver and distribute products or services to customers)\n- have a global view of a supply chain, where many distinct companies collaborate to meet customer requirements bearing in mind competitors and operational differentiators.', 'The course describes the basics of supply chain management, using a manufacturing company as example ', '- production planning: long term planning (level, seasonal, mix...)\n- master scheduling : mid term planning, taking into consideration family of products\n- materials requirement planning : what to buy at the latest, avoid stock outs \n- capacity management : align production with capacity, or adjust capacity\n- production activity control : check on field that activites are carried out as required, and adjust if necessary (feedback loop), \n- forecasting: present forecasting techniques, \n- inventory fundamentals : function of inventories, inventory costs \n- order quantities : economic order quantity \n- Independant demand ordering systems : order point system, safety stock\n- Bullwhip effect : understand the impact of wrong forecasts or the lack of trust between SCM partners\n- Lean Production : basic presentation of lean concepts\n- Service level agreements : understand the pros and cons of SLA\n- Distribution and retailing : detailed view of the distribution sector\n- Trends in supply chain management', 'Class attendance and Participation ; 10%\nFinal exam (QCM) : 90%', 'supply chain management - strategy, Planning & Operations (Sunil Chopra, Peter Meindl - Pearson International Edition)'),
(35, 'Customer Relationship Management (CRM)', 'Entreprise Information Systems', 'MAN_502_CRM', 18, 3, 1, 4, '', '', '', '', '', ''),
(36, 'IT Purchase', 'Entreprise Information Systems', '_A_TROUVER', 12, 3, 1, 4, '', '', '', '', '', ''),
(37, 'Green IT', 'Advanced  Management & Engineering Science', 'MAN_524_GNIT', 12, 3, 1, 5, 'NA', 'The purpose of this course is to make the students sensitive about the environmental challenges of Information Technology, to learn the Best Practices in this domain and to review the actions they will have to take in their professional life through case studies and examples.', 'Green IT is about the economically, environmentally and socially responsible practices around information technology. ', 'The structure of the course will be the following \nWhat is Green IT? \noDefinition of Green IT\noOverview and recognition  of the problem\noExamples of environmental issues and facts\nRegulations and Certifications\nEconomic driver \noThe business case of Green IT \noExamples of savings\noCase study with example of savings calculations\nGreening the Data Centre\noCooling , Design efficient data centres\noConsolidation , Virtualization\noStorage \noNetwork\noApplications integration\nGreening the office\noDesktop , Laptop\noPrinting \noMobile computing\nGreening the code\nSocial driver\noTelecommuting\noSocial responsibility\nEvolution to Green IT 2.0', 'Class attendance and participation 30%\nFinal Exam ( Quiz 30% + Case study 40% ) 70%', 'The next wave of Green IT , Madhumitha s Shilpa w\nIntroduction to Green IT, Chris Hammond-Thrasher, January 2012\nGreen Web, Joey Shepp, Green MBA\nGreen IT : Why mid-size companies are investing now ?  Infotech\nWhat''s Your Carbon Footprint? Sustainability and Green IT Initiatives That Make a Difference, MARC, January 8, 2009\nGreen Storage II : Metrics & Measurement, SNIA, Patrick B. Chu, Erik Riedel\nWebography\nwww.thegreengrid.org \nwww.42u.com\nwww.tech-pundit.com\nhttp://hightech.lbl.gov/datacentres.html\nhttp://energy.gov/\nwww.teleplanconsulting.no\nwww.greencodelab-challenge.org/'),
(38, 'Advanced PM : Scrum / Agile', 'Advanced  Management & Engineering Science', '_A_TROUVER', 12, 3, 1, 9, '', '', '', '', '', ''),
(39, 'Corporate Finance', 'Business Exposure', 'FIN_402_CFM', 12, 2, 1, 1, '', '', '', '', '', ''),
(40, 'Information Systems Management', 'Entreprise, Leadership  & Global IT', 'MAN_413_MANSI', 12, 3, 1, 4, 'Knowledge of IT and good English level ', 'Upon completion of this course the students should get a fundamental knowledge of  all aspects of management of Information systems including strategic,technology and human angle .\nParticipants will understand most of the challenges that IT managers face today including strategic alignment with Business Units.\nThey will practice taking management decisions in a large IT environment or advising IT departments on their management practices.\nThis course is essential to anyone who aims to develop is career in an IT department or make business with IT professional .', 'This course is about all aspects of an IT department and how to manage it.', 'Enterprise and its ecosystem\nThe IT processes : measurement and improvement\nIT department and its relationship with businesses\nERP ,Knowledge Management , Decision Support \nHuman side of IT projects \nKnowledge Management\nDecision Support Systems\nTechnology and storage architecture\nBusiness Continuity and High availability \nProtection of data \nHigh availability architectures .', 'Attendance and participation (20%)\nFinal exam written (80%)', 'Lots of tools and publication available on IT '),
(41, 'IT Governance', 'Entreprise, Leadership  & Global IT', 'MAN_520_GOUVIT', 14, 3, 1, 4, 'Knowledge of Information System Management', 'Upon completion of this course the students will get a broad and strategic knowledge of the role and responsibilities of the governance of a company , the position of IT in the company, the role of IT governance .\nThey will practice managing an IT department using a Balance Score Card as any CIO would do.\nThey will be able to evaluate if IT is strategic for a company or just a cost Center.\nThey will be able to manage an IT budget , select the different projects and allocate the expenses.\nThey will be able to discuss with a CIO and understand his or her challenges. \nThis course is essential to anyone who wants to have a management position inside IT department or become a Project Management', 'This course is about IT Governance and enterprise management \nRelationship between Business Units and IT , strategic alignment of IT .\n How CIOs manage their departments', 'Enterprise Governance\nGovernance vs Management : clear positioning of Roles and Responsibilities\nIT Governance and it''s relationship with Enterprise Governance \nThe strategic alignment \nStrategy of a company : case study \nBusiness Score card applied to IT department\nIT Gov BSC game : practicing how to pilot IT ! \nThe split of the IT budget\nFinancial management : CAPEX /OPEX \nReporting of the CIO : a good indicator .', 'Attendance and participation (20%)\nFinal exam written (80%)', 'Many publications and articles will be reviewed \nIncluding ISACA publications\nCOBIT \nVal IT\nBSC (Business Score Card)'),
(42, 'ITIL', 'Advanced  Management & Engineering Science', 'MET_509_ITILM', 12, 3, 1, 4, 'Knowledge of information Systems management ', 'Upon completion of this course students should be prepared for passing  certification EXAM for ITIL base level. They will also get a solid understanding of IT service Management along with service Lifecycle .\nAs most of the companies use ITIL best practices , this course is essential to anyone willing to start or develop his or her career in an IT department.', 'ITIL is a set of good practices in IT management applied in most industries , it is also a well known certification for IT professional', 'Mastering terminology , acronyms and fundamental notions\nThe service Lifecycle\nThe phase of Lifecycle :\nService Strategy\nService Design\nService Transition\nService Operation\nContinuous Service Improvement', 'Attendance and participation (20%)\nFinal exam written (80%)', 'itil books');

-- --------------------------------------------------------

--
-- Table structure for table `course_instructor`
--

CREATE TABLE IF NOT EXISTS `course_instructor` (
  `course_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`instructor_id`),
  KEY `IDX_EE1E0D5E591CC992` (`course_id`),
  KEY `IDX_EE1E0D5E8C4FC193` (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_instructor`
--

INSERT INTO `course_instructor` (`course_id`, `instructor_id`) VALUES
(4, 4),
(5, 4),
(6, 5),
(7, 5),
(8, 5),
(9, 6),
(10, 6),
(11, 6),
(12, 7),
(13, 7),
(14, 7),
(15, 8),
(16, 8),
(17, 9),
(18, 9),
(19, 10),
(20, 10),
(25, 11),
(26, 11),
(27, 11),
(28, 12),
(29, 13),
(30, 14),
(31, 15),
(32, 16),
(33, 16),
(34, 16),
(35, 17),
(36, 17),
(37, 17),
(38, 17),
(39, 18),
(40, 19),
(41, 19),
(42, 19);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `salutation` int(11) DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressline1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressline2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_31FC43DD92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_31FC43DDA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `salutation`, `firstname`, `lastname`, `phonenumber`, `addressline1`, `addressline2`, `city`, `zipcode`, `country`) VALUES
(4, 'livreur.adel', 'livreur.adel', 'livreur.adel@gmail.com', 'livreur.adel@gmail.com', 1, 'gfp65g7s15w0gw8wg84w08kcg4o04ck', '$2y$13$gfp65g7s15w0gw8wg84w0uYygJ9DPVmAkHhyF9ZbwNd6Wu10wi0OS', '2016-09-05 12:46:25', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Adel', 'KHALDI', '', '', '', '', '', 'France'),
(5, 'laroque', 'laroque', 'laroque@u-cergy.fr', 'laroque@u-cergy.fr', 1, 'ir2009o1j8080848ksss8sc8g0c8k8w', '$2y$13$ir2009o1j8080848ksss8eATbBYC12OTQYeDsdp5pz.NfSo41kvli', '2016-09-05 15:55:37', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Philippe', 'LAROQUE', '', '', '', '', '', 'France'),
(6, 'mplasse', 'mplasse', 'mplasse@free.fr', 'mplasse@free.fr', 1, '6ew2brbppxwckc4gw4k88w0woo4kgss', '$2y$13$6ew2brbppxwckc4gw4k88uaghcSVT9xeZ5RVdNzHVDCD/O7ymqjyy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Michel', 'PLASSE', '', '', '', '', '', 'France'),
(7, 'hadi.elkhoury', 'hadi.elkhoury', 'hadi.elkhoury@oservice2.com', 'hadi.elkhoury@oservice2.com', 1, 'awb7xkzroy04kg8gwss8kco4wsokgkk', '$2y$13$awb7xkzroy04kg8gwss8kOdYGZiT23t1PI0HI31VqC5szQPwO50we', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Hadi', 'EL-KHOURY', '', '', '', '', '', 'FRANCE'),
(8, 'erik', 'erik', 'erik@infrageeks.com', 'erik@infrageeks.com', 1, 'crm43sb3m9s04cckcw8ccsc004wgs44', '$2y$13$crm43sb3m9s04cckcw8cceTHOv0rv85pBk1rO5ML8HL1ezvlsjKDW', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Erik', 'ABLESON', '', '', '', '', '', 'FRANCE'),
(9, 'geraud.dedrouas', 'geraud.dedrouas', 'geraud.dedrouas@gmail.com', 'geraud.dedrouas@gmail.com', 1, 'pcd23zx6i0gosk8sgo4oow4ogc0skgc', '$2y$13$pcd23zx6i0gosk8sgo4oouOYZyF0jnT0GVjZ7iHq/7gbUeEsMRvnG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Geraud', 'DE-DROUAS', '', '', '', '', '', 'FRANCE'),
(10, 'apdepeyronnet', 'apdepeyronnet', 'apdepeyronnet@gmail.com', 'apdepeyronnet@gmail.com', 1, 't3nhdgs7uf4408wk8wkcsk0gogsk8go', '$2y$13$t3nhdgs7uf4408wk8wkcseCcn/93oTpX8eQyuV2KLL7/SuKQozAE2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Anne-Pierre', 'De-PEYRONNET', '', '', '', '', '', 'FRANCE'),
(11, 'rabih.haddad', 'rabih.haddad', 'rabih.haddad@epita.fr', 'rabih.haddad@epita.fr', 1, 'l3slarve86osw4g0gw0o8k4s84ssook', '$2y$13$l3slarve86osw4g0gw0o8eb3nQgb3dV53AQT/6GvhI7qm.hf0iu36', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Rabih', 'HADDAD', '', '', '', '', '', 'FRANCE'),
(12, 'athienot', 'athienot', 'athienot@gmail.com', 'athienot@gmail.com', 1, 'sivjr1u6h9ckkwsgs0ow8gcs8w0ck8c', '$2y$13$sivjr1u6h9ckkwsgs0ow8evYHswnhpkzosBp.zODNJft.1Xaqs7i.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Alain', 'THIENOT', '', '', '', '', '', 'FRANCE'),
(13, 'marwan.burelle', 'marwan.burelle', 'marwan.burelle@lse.epita.fr', 'marwan.burelle@lse.epita.fr', 1, 'pnkviudcuas4w8gwg40ogkokook4ccc', '$2y$13$pnkviudcuas4w8gwg40ogeVw9qjSummGOwVy3qjQm9icVBDZ/ubOW', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Marwan', 'BURELLE', '', '', '', '', '', 'FRANCE'),
(14, 'stephane.descaves', 'stephane.descaves', 'stephane.descaves@laposte.net', 'stephane.descaves@laposte.net', 1, '49nd869atles84cc8wk08c8ooscc48w', '$2y$13$49nd869atles84cc8wk08OjBHUFajZMH3ia5jr.yrcDt6ARcpqtvy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Stephane', 'DESCAVES', '', '', '', '', '', 'FRANCE'),
(15, 'neil', 'neil', 'neil@minkley.fr', 'neil@minkley.fr', 1, 's394i784wnkc8gg4w4o0wogc0gwooo4', '$2y$13$s394i784wnkc8gg4w4o0wePC95IWCnC6omxvOAQhEQUu5iVVx038C', '2016-09-07 17:12:51', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Neil', 'MINKLEY', '', '', '', '', '', 'FRANCE'),
(16, 'rembowskijan', 'rembowskijan', 'rembowskijan@gmail.com', 'rembowskijan@gmail.com', 1, 'mk26exrgphwsw0oo0ss08og4ss84k0s', '$2y$13$mk26exrgphwsw0oo0ss08edYaZHQXpMKdzOaCKMLXjasghmGSlCwe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Jan', 'REMBOWSKI', '', '', '', '', '', 'FRANCE'),
(17, 'olivierberthet', 'olivierberthet', 'olivierberthet@outlook.com', 'olivierberthet@outlook.com', 1, 'jqbul5jae8g8kg4kgs0o0gog8wooccw', '$2y$13$jqbul5jae8g8kg4kgs0o0e34mMgeCXlldDiKiMtaQ.755XMr4lr/.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Olivier', 'BERTHET', '', '', '', '', '', 'FRANCE'),
(18, 'abdelfattah.rochdi', 'abdelfattah.rochdi', 'abdelfattah.rochdi@yahoo.fr', 'abdelfattah.rochdi@yahoo.fr', 1, 'c3k9z4jzq20os4swo40gw4g0000cwgo', '$2y$13$c3k9z4jzq20os4swo40gwuOwgH3vKnXIA0obW3Z9s/mfH/Eo6Qlou', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Abdelfattah', 'ROCHDI', '', '', '', '', '', 'FRANCE'),
(19, 'axe.ullern', 'axe.ullern', 'axe.ullern@gmail.com', 'axe.ullern@gmail.com', 1, 'c7eikke89fwosccw8c8go0c0gkgw8c0', '$2y$13$c7eikke89fwosccw8c8goun2sPhP7.hJbel0FmQTp4qVtCUW0rOFK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Axel', 'ULLERN', '', '', '', '', '', 'FRANCE'),
(20, 'jeansebastien.prost', 'jeansebastien.prost', 'jeansebastien.prost@free.fr', 'jeansebastien.prost@free.fr', 1, 'o0adbivos744g4wgwg8cscss808ok4s', '$2y$13$o0adbivos744g4wgwg8csOdcHT8/Wtt7pCn3oNM0PREM1QBgXxWPq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Jean-Sebastien', 'PROST', '', '', '', '', '', 'FRANCE'),
(21, 'chrysolin.brabant', 'chrysolin.brabant', 'chrysolin.brabant@ehoconseil.com', 'chrysolin.brabant@ehoconseil.com', 1, 'klem5zptyxw0sgokwocs0og4socwso8', '$2y$13$klem5zptyxw0sgokwocs0ekdflCOkgp7H4TXtki6Gjz1iRr/fRe3a', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Chrysoline', 'BRABANT', '', '', '', '', '', 'FRANCE'),
(22, 'sylvieappriou', 'sylvieappriou', 'sylvieappriou@gmail.com', 'sylvieappriou@gmail.com', 1, 'l4bg4t3za3kk0gkcwk0gcwgcw4scwgk', '$2y$13$l4bg4t3za3kk0gkcwk0gcuWHP2gV.h11RG5jA.pkesRKJg4oxDxdq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Sylvie', 'APPRIOU', '', '', '', '', '', 'FRANCE'),
(23, 'alice.million', 'alice.million', 'alice.million@epita.fr', 'alice.million@epita.fr', 1, 'pssaydrewggccok4k0c4ss0084o888w', '$2y$13$pssaydrewggccok4k0c4sePuRvnmDHWdglwt7FGC72uFaQXpeSaxO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Alice', 'MILLION', '', '', '', '', '', 'FRANCE'),
(24, 'laurent.trebulle', 'laurent.trebulle', 'laurent.trebulle@epita.net', 'laurent.trebulle@epita.net', 1, 'imq04q1av4g8cwo80kko4gcokkwgooo', '$2y$13$imq04q1av4g8cwo80kko4ePyldyxiLqL2UlLL.8iWPqBFW1Gv1f6K', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Laurent', 'TREBULLE', '', '', '', '', '', 'FRANCE'),
(25, 'sylvie', 'sylvie', 'sylvie@cross-roads-communication.com', 'sylvie@cross-roads-communication.com', 1, '2b2xj60jf51cw484gcsgw0ooww8sw48', '$2y$13$2b2xj60jf51cw484gcsgwuymXQ18OJBlHRu/evALTF.mSuO/dXQxS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Sylvie', 'TOURNIER', '', '', '', '', '', 'FRANCE'),
(26, 'celia.fernandez', 'celia.fernandez', 'celia.fernandez@epita.fr', 'celia.fernandez@epita.fr', 1, 'l7vsxffyqio40kgscsw8c8c88k0844g', '$2y$13$l7vsxffyqio40kgscsw8cu8XS81KcvBR/awWxucS4cYNTP6mL4gXG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Celia', 'FERNANDEZ', '', '', '', '', '', 'FRANCE'),
(27, 'bonjf', 'bonjf', 'bonjf@math-info.univ-paris5.fr', 'bonjf@math-info.univ-paris5.fr', 1, 'j0n11komw60cs0804gwkkc0so80g0wc', '$2y$13$j0n11komw60cs0804gwkkOlqrlvwN4.PrRVbtX6TLUStPnzqpl9Ki', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Jean-Francois', 'BONNET', '', '', '', '', '', 'FRANCE'),
(28, 'thomas.broussard', 'thomas.broussard', 'thomas.broussard@gmail.com', 'thomas.broussard@gmail.com', 1, 'jd40b7mhj74s8sk40gsco44oowc0s0c', '$2y$13$jd40b7mhj74s8sk40gscouPoeAmRdtm0ojpMe4sZur6aMER37RsrC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Thomas', 'BROUSSARD', '', '', '', '', '', 'FRANCE'),
(29, 'osman.salem', 'osman.salem', 'osman.salem@parisdescartes.fr', 'osman.salem@parisdescartes.fr', 1, 'pbavt7rd000wkgg4s8k088sc44s80go', '$2y$13$pbavt7rd000wkgg4s8k08u6m9EjeP.ftfmDOdv064rxkrdthyGKVC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Osman', 'SALEM', '', '', '', '', '', 'FRANCE'),
(30, 'y.gal.fr', 'y.gal.fr', 'y.gal.fr@gmail.com', 'y.gal.fr@gmail.com', 1, 'q0n4fyqjd5ccgkww4404o44wsco0c8g', '$2y$13$q0n4fyqjd5ccgkww4404ouoYXf9GxuVIZDCP8SYheOnCF1u09O9wi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Yossi', 'GAL', '', '', '', '', '', 'FRANCE'),
(31, 'eunika', 'eunika', 'eunika@innovation3d.fr', 'eunika@innovation3d.fr', 1, '7uxbyz1vpecc0oscc888soscw8ggcwo', '$2y$13$7uxbyz1vpecc0oscc888seU6/R6QcaNYznnI0z0Kw7gaqW4BvbQkq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Eunika', 'MERCIER-LAURENT', '', '', '', '', '', 'FRANCE'),
(32, 'Thierry.JOUBERT', 'thierry.joubert', 'Thierry.JOUBERT@theoris.fr', 'thierry.joubert@theoris.fr', 1, 'mmoqidom8b480goksgogss0c8sok8wk', '$2y$13$mmoqidom8b480goksgogsePx9duCMofkskbRBLk2.PEzvrIcWF7cS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Thierry', 'JOUBERT', '', '', '', '', '', 'FRANCE'),
(33, 'david.menager', 'david.menager', 'david.menager@3ie.fr', 'david.menager@3ie.fr', 1, 'miodwfpxxm8s88cw4o0s0sww4kssg0c', '$2y$13$miodwfpxxm8s88cw4o0s0e6Hexvu3vHXzx514P5HL2lgmNjPTPM8O', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'David', 'MENAGER', '', '', '', '', '', 'FRANCE'),
(34, 'jjuzcateguir', 'jjuzcateguir', 'jjuzcateguir@gmail.com', 'jjuzcateguir@gmail.com', 1, 'qdewkdgzhnkg88800w0osgs0c4s0oos', '$2y$13$qdewkdgzhnkg88800w0oseDlFZLd2Mn6aSzcOsA9crapwymkRRPDi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Juan', 'UZCATEGUI', '', '', '', '', '', 'FRANCE'),
(35, 'anne-sophie.pachet', 'anne-sophie.pachet', 'anne-sophie.pachet@epita.fr', 'anne-sophie.pachet@epita.fr', 1, 'chs9zxbvtnw4sc4wcs44swgow0kokok', '$2y$13$chs9zxbvtnw4sc4wcs44suoculpwyEw9lrhfw1dMlb4wE9UUdIn3K', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 1, 'Anne-Sophie', 'PACHET', '', '', '', '', '', 'FRANCE'),
(36, 'robert.erra', 'robert.erra', 'robert.erra@epita.fr', 'robert.erra@epita.fr', 1, 'tbvcp3xft8g48g0wcck440kw804wkgw', '$2y$13$tbvcp3xft8g48g0wcck44uufvJELTXc7JNTqJPrSfB3tvA4sNbZyy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Robert', 'ERRA', '', '', '', '', '', 'FRANCE'),
(37, 'mohammadsalmannadeem', 'mohammadsalmannadeem', 'mohammadsalmannadeem@gmail.com', 'mohammadsalmannadeem@gmail.com', 1, 'lhjd78wvr00sgosggw4k8sokcg0wgcw', '$2y$13$lhjd78wvr00sgosggw4k8extNYlVHVHWM1UtJ7rBGheINxbQkwhSS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 2, 'Mohammad-Salman', 'NADEEM', '', '', '', '', '', 'FRANCE');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `programname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `programname`) VALUES
(1, 'ME'),
(2, 'MSc'),
(3, 'ME and MSc');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE IF NOT EXISTS `specialization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specializationname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `specializationname`) VALUES
(1, 'FUND'),
(2, 'FUND_HARMO'),
(3, 'GITM'),
(4, 'GITM_ISM'),
(5, 'GITM_SDM_SNS'),
(6, 'HARMO'),
(7, 'ISM_SE_CS'),
(8, 'SDM'),
(9, 'SDM_SE'),
(10, 'SE'),
(11, 'SNS'),
(12, 'SNS_CSCS_SNS');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_instructor`
--
ALTER TABLE `course_instructor`
  ADD CONSTRAINT `FK_EE1E0D5E591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_EE1E0D5E8C4FC193` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
