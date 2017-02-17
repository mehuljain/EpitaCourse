<?php

namespace EpitaCourseBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use EpitaCourseBundle\Entity\Course;


class LoadCourseData extends AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface {
    
    /**
     * @var ContainerInterfac
     */
    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        
        $coursename = ["Business Intelligence (BI) & Data Warehouses","Geomarketing & Geographic Information Systems",
                          "Supply Chain Management (SCM)"];
        $teachingunit = ["Entreprise Information Systems","Entreprise, Leadership  & Global IT",
            "Entreprise Information Systems"];
        $coursecode = ["SIB_504_BIDWM","SIB_411_GEOMA","MAN_507_SCMA"];
        $atthours = [15,12,12];
        $ectscredits = [1,1,1];
        $prerequistes = ["NA","NA","NA"];
        $learningoutcomes = ["At the end of the course students should be able to :
•Distinguish between data, information, knowledge, intelligence  and wisdom and evaluate the impact of big data and the cloud
•Design the informational flow in processes, 
•Use business intelligence to  provides competitive advantage to a company, 
•Propose the organisation of data sharing and use in a firm, 
•Set up the business intelligence unit throughout a firm and do benchmarking outside the firm (Veille). 
•Master the tools for intelligent collecting, storing, sharing and extracting information from Internet
•Situate the role of information technologies in business information systems
•Understand the barriers and corporate cultural acceptance, to change in firms as success/failure factors for business intelligence",
            "Learning outcomes – Students at the end of the course should be able to:-
understand how huge amounts of data are providing competitive advantage for firms in all sectors
analyse market potential and segmentation
build operational business plans for GIS applications",
            "- understand the basic concepts of supply chain management
- have a global view of how these concepts are applied in various manufacturing or service contexts, operating in various strategies (continuous, batch, intermittent, job shop, project...)
- make the distinction between supply (what is required to be able to operate) and demand (how to meet requirements, and deliver and distribute products or services to customers)
- have a global view of a supply chain, where many distinct companies collaborate to meet customer requirements bearing in mind competitors and operational differentiators."];
        $courseoverview = ["It can safely be said today that the greatest capital value of a company is its knowledge. It is sometimes referred to as intellectual capital when accountants wish to evaluate the worth of a company - the Society of Management Accountants of Canada (SMAC) notes that “In balance sheet terms, intellectual assets are those knowledge-based items, which the company owns which will produce a future stream of benefits for the company” (SMAC 1998). However if most researchers agree that knowledge forms around 80% of the value of  a company there is also agreement on the fact that, at best, only some 20% of that knowledge is correctly managed.
Rather than plunging into theory the course aims at understanding what business intelligence is, where it is found and how many try to manage it. The course will look at the close links between business intelligence  and other aspects of management and case studies and examples will be taken from these fields.",
            "There is no limit to the amount of data that can be linked to each point, line or polygon on a numerical map. Input comes from a fast growing number of sources that are aiming at providing the best possible understanding of a situation or issue, detecting trends, opportunities, forming predictions and planning strategies. Data mining, social media, spatial microsimulation, forming indicators, modelling and comparing optimal responses are some of the tools for estimating responsiveness performance, effects of neighbourhood characteristics, retail markets or tracking cellular telephones amongst others. Indeed practically all human economic activity il geo-localised. There are however growing concerns on the pertinance, extent of coverage, choice of data and attacks on private data leading to interpretations which bring up ethical issues. 
GIS, now linked into Big Data is probably the most powerful tool today for analytics as all results are easily available for automatic visualisation. Geomarketing is coming out as a vital tool which links into the whole set of enterprise tools managing data today. ",
            "The course describes the basics of supply chain management, using a manufacturing company as example "]   ;
        $listoftopics = ["4 - Course Structure
4. 1 Data, information, knowledge in firms. The growing “size” of information 
How much? - case study from information for customer segmentation for filling hypermarket shelves
Too much? - case study of firms displacement in USA with KM in Georgia Power
How new and how useful  is Information in new social technologies?
Disinformation and representations of information.
4. 2 Processes for business intelligence.
4. 3 Examples in supply chain management
4. 5 Case studies of needs and planning in Alcatel, SETEC and companies.
4. 6 Tools for business intelligence
4. 7 Setting up business intelligence units in a company – barriers and enabling factors
4. 7 Business Intelligence and  benchmarking.",
            "Structures and working of GIS
Market segmentations and GIS
Visualisation of data bases
Big Data and GIS",
            "- production planning: long term planning (level, seasonal, mix...)
- master scheduling : mid term planning, taking into consideration family of products
- materials requirement planning : what to buy at the latest, avoid stock outs 
- capacity management : align production with capacity, or adjust capacity
- production activity control : check on field that activites are carried out as required, and adjust if necessary (feedback loop), 
- forecasting: present forecasting techniques, 
- inventory fundamentals : function of inventories, inventory costs 
- order quantities : economic order quantity 
- Independant demand ordering systems : order point system, safety stock
- Bullwhip effect : understand the impact of wrong forecasts or the lack of trust between SCM partners
- Lean Production : basic presentation of lean concepts
- Service level agreements : understand the pros and cons of SLA
- Distribution and retailing : detailed view of the distribution sector
- Trends in supply chain management"];
        $assessmentscheme = ["Evaluation will be based on : 
attendance, punctuality and participation in courses 20%
•Case study in groups  as class work40% 
•Industrial business intelligence report40%",
            "Presence, Participation activity in classroom   20%
Team Project work  40%
Individual work  40%",
            "Class attendance and Participation ; 10%
Final exam (QCM) : 90%"];
        $recommendedresources = ["BUSINESS INTELLIGENCE BIBLIOGRAPHY
Learning To Fly - Practical Lessons From One Of The Worlds Leading Knowledge Companies, Geoff Parcell,  Capstone, 01/02/2004
The Circle, Dave Eggers, Publisher: Vintage Books (April 22, 2014), ISBN-10: 0345807294, ISBN-13: 978-0345807298
The Zero Marginal Cost Society: The internet of things, the collaborative commons, and the eclipse of capitalism, Jeremy Rifkin, Palgrave Macmillan, ISBN 978-1-137-27846-3
MIS Quaterly Volume 36, Number 4 — December 2012, Special Issue: Business Intelligence Research, Business Intelligence and Analytics: From Big Data to Big Impact , Hsinchun Chen, Roger H. L. Chiang, and Veda C. Storey (pp. 1165-1188)
WEB SITES
http://bigdatauniversity.com/
http://www.knowledge-management-online.com/
http://lucasmcdonnell.com/essential-knowledge-management-sites-and-blogs/
http://www.journaldunet.com/solutions/emploi/dossier/0504km/sommaire.shtml
http://km.brint.com/",
            "GEOMARKETING
1Geomarketing: Methods and Strategies in Spatial Marketing (Geographical Information Systems Series (ISTE-GIS)), Gerard Cliquet, (Editor)   Publisher: Wiley-Blackwell (7 Feb 2006), Language English, ISBN-10: 190520907X , ISBN-13: 978-1905209071
Measuring Up: The Business Case for GIS Christopher Thomas Jou (Author), Milton Ospina (Author) , Paperback: 200 pages, Publisher: ESRI Press (September 1, 2004), Language: English,  ISBN-10: 1589480880, ISBN-13: 978-1589480889
The Business Benefits of GIS: An ROI Approach, David Maguire (Author), Victoria Kouyoumijan (Author), Ross Smith (Author), Paperback: 243 pages, Publisher: ESRI Press (August 1, 2008), Language: English, ISBN-10: 158948200X, ISBN-13: 978-1589482005
Thinking About GIS: Geographic Information System Planning for Managers, Roger Tomlinson (Author), Paperback: 256 pages, Publisher: ESRI Press; Fourth Edition, New edition edition (April 1, 2011), Language: English, ISBN-10: 1589482735, ISBN-13: 978-1589482739
Marketing
Marketing Plans: How to Prepare Them, How to Use Them, Professor Malcolm McDonald (Author), Hugh Wilson (Author), Paperback: 580 pages, Publisher: John Wiley & Sons; 7th Edition edition (18 Feb 2011), Language English, ISBN-10: 0470669977, ISBN-13: 978-0470669976
Consumer Behaviour, Martin M Evans (Author), Gordon Foxall (Author), Ahmad Jamal (Author), 576 pages,  Publisher: John Wiley & Sons; 2nd Edition edition (31 Mar 2009), Language English,  ISBN-10: 0470994657, ISBN-13: 978-0470994658
Principles of Marketing: European Edition (Pie), Philip Kotler (Author), Prof Veronica Wong (Author), Prof John Saunders (Author), Gary Armstrong (Author), Paperback: 992 pages,  Publisher: Financial Times/ Prentice Hall; 4 edition (30 Nov 2004), Language English, ISBN-10: 0273684566 , ISBN-13: 978-0273684565
The Power of Place: Advanced Customer and Location Analytics for Market Planning, Keith Peterson (Editor), Hardcover: 231 pages, Publisher: Integras (June 2004), Language: English,   ISBN-10: 0975405209, ISBN-13: 978-0975405208
Data & Segmentation
2Data Mining Techniques in CRM: Inside Customer Segmentation, Konstantinos Tsiptsis (Author), Antonios Chorianopoulos (Author), Hardcover: 372 pages, Publisher: Wiley-Blackwell (15 Jan 2010), Language English, ISBN-10: 0470743972, ISBN-13: 978-0470743973
Market Segmentation: How to Do it, How to Profit from it, Malcolm McDonald (Author), Ian Dunbar (Author), Paperback: 512 pages, Publisher: Goodfellow Publishers Limited; 4th Revised edition (29 Jun 2010), Language English, ISBN-10: 1906884188, ISBN-13: 978-1906884185
Handbook of Market Segmentation: Strategic Targeting for Business and Technology Firms, Third Edition, Art Weinstein (Author), Paperback: 266 pages,   Publisher: Routledge; 3rd edition edition (20 April 2004), Language English, ISBN-10: 0789021579, ISBN-13: 978-0789021571

http://www.gfk-geomarketing.com/geomarketing/glossary.htm
http://gislounge.com/
http://www.gisdevelopment.net/tutorials/tuman003.htmEA40",
            "supply chain management - strategy, Planning & Operations (Sunil Chopra, Peter Meindl - Pearson International Edition)"];
        $em = $this->container->get('doctrine')->getEntityManager('default');
        $program = $em->getRepository('EpitaCourseBundle:Program')->findOneBy(array('id'=> 3));
        $program = ["3","1","3"];
        $specialization = $em->getRepository('EpitaCourseBundle:Specialization')->findOneBy(array('id'=> 12));
        $specialization = ["4","3","4"];
        $um = $this->container->get('fos_user.user_manager');
        $instructor = $um->findUserByUsername('utkarsh2k2');
//        $coursename = ['Network Security', 'Digital Risks and Network Architecture','Data Flow and Computer Networks'];
//        $teachingunit = ['Advanced Security', 'Technical Skills','Networks and System Harmonization'];
//        $coursecode = ['NET_523_NSEC', 'INF_466_DRNA','INF_467_DFCN'];
//        $atthours = [20,12,18];
//        $ectscredits = [3,1,1];
//        $prerequistes = ['To have followed the course Networking Technologies', '',''];
//        $learningoutcomes = ["to design, install, operate, secure and maintain networks in small-to-medium businesses, as "
//            . "                well as enterprise and service provider environments.", "How cybersecurity fits in a global enterprise risk management framework
//How to properly cover the risk assessment equation's attributes
//How to assess Risk in digital ecosystems
//How to act upon an identified risk","Learn how to model business processes and interpret them
//How to obtain clarity on data flows
//Identify and classify sensitive data in data flows
//Identify involved stakeholders and interdependencies
//How to integrate security needs all along the data flow
//How to securely design an IT network"];
//        $courseoverview = ["The course provides knowledge of advanced network architecture and "
//            . "network security in particular the study of advanced network protocols.",
//                           "Understanding the founding equation of Risk:
//\"A Risk is constituted whenever a threat agent (whether human, natural or automated) circumvents 
//already implemented security measures and successfully exploits a given vulnerability on a 
//business asset (critical data, personal data, ...).\"",
//                            "If you don’t understand and see your data flows, you can neither have a "
//            . "secure by design network architecture, nor classify data, nor identify"
//            . " data sets that are subject to specific legal or contractual requirements. "
//            . "This course is your passport to the Executive Committee whenever you need to gain "
//            . "support and sponsorship for your cybersecurity initiatives. Without the appropriate "
//            . "language, stakeholders will be lost in translation."]   ;
//        $listoftopics = ["The course focuses on intermediate routing protocols (OSPF, EIGRP), "
//                        . "access control lists (ACLs), configuration of switches, Ethernet switching, "
//                        . "Virtual LANs (VLANs), Spanning Tree Protocol (STP), Rapid Spanning Tree Protocol (RSTP)"
//                        . ", and VLAN Trunking Protocol (VTP). The second part of the course is dedicated to advanced "
//                         . "IP addressing techniques (NAT: Network Address Translation and DHCP). "
//            . "The last part provides guidelines about the activities to be carried out and the resources to be used to secure "
//            . "an organization's network (VPN – MPLS – Ipsec).","Business Impact Analysis
//Risk Management
//Risk Assessment
//Risk Mitigation
//Risk Transfer
//Risk Annulment",
//                "Business Process Modeling
//Data Flow
//Network Design
//Data Classification
//Business Impact Analysis"];
//        $assessmentscheme = ["Final exam: 100%
//Exam lab allows the professor to evaluate the degree of knowledge and comprehension of each individual student.
//Exam lab is an individual exam during which each student has to realise a specific network and put in 
//practice what he has learned during the previous challenging labs. ","1. Class attendance and participation [10 %], 
//2. Group Project and Presentation [20 %], 
//3. Assignments [20 %]
//4. Project [25 %], 
//5. Final Exam [25 %]",
//                "1. Class attendance and participation [10 %], 
//2. Group Project and Presentation [20 %], 
//3. Assignments [20 %]
//4. Project [25 %], 
//5. Final Exam [25 %]"];
//        $recommendedresources = ["CCNA 200-120 – Exam Certification Library – Cisco press
//Networks, Andrew Tanenbaum, Pearson Education
//Network Security Bible, Eric Cole, Ed. 2009, Wiley Publishing Inc.","Digital Security Risk Management
//http://www.oecd.org/sti/ieconomy/digital-security-risk-management.pdf",
//                "http://brsilver.com/
//http://obashi.co.uk/
//http://www.sekimia.com"];
//        $em = $this->container->get('doctrine')->getEntityManager('default');
//        $program = $em->getRepository('EpitaCourseBundle:Program')->findOneBy(array('id'=> 3));
//        $program = ['3','3','3'];
//        $specialization = $em->getRepository('EpitaCourseBundle:Specialization')->findOneBy(array('id'=> 12));
//        $specialization = ['12','2','2'];
//        $um = $this->container->get('fos_user.user_manager');
//        $instructor = $um->findUserByUsername('hadi.elkhoury');
//        var_dump($instructor);
//        var_dump($program);
//        var_dump($specialization);
//        exit;
        
        for ($i = 0; $i < count($coursename); $i++) {
            $courseAdmin = new Course();
            $courseAdmin->setCoursename($coursename[$i]);
            $courseAdmin->setTeachingunit($teachingunit[$i]);
            $courseAdmin->setCoursecode($coursecode[$i]);
            $courseAdmin->setAtthours($atthours[$i]);
            $courseAdmin->setEctscredits($ectscredits[$i]);
            $courseAdmin->setPrerequistes($prerequistes[$i]);
            $courseAdmin->setLearningoutcomes($learningoutcomes[$i]);
            $courseAdmin->setCourseoverview($courseoverview[$i]);
            $courseAdmin->setListoftopics($listoftopics[$i]);
            $courseAdmin->setAssessmentscheme($assessmentscheme[$i]);
            $courseAdmin->setRecommendedresources($recommendedresources[$i]);            
            $courseAdmin->setProgram($program[$i]);
            $courseAdmin->setSpecialization($specialization[$i]);
            $courseAdmin->addInstructor($instructor);

            $manager->persist($courseAdmin);
            $manager->flush();
        }
    }

    public function getOrder() {
        return 4;
    }

}
