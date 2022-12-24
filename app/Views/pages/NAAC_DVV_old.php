<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />

<style>
#hidden-tabs{
  height: 0px;
  list-style-type: none;
  padding:0; 
  margin:0;
 
}
#hidden-tabs li{
  height: 0px;
  padding:0; 
  margin:0;
}

#hidden-tabs li a{
  height: 0px;
  padding:0; 
  margin:0;
}

/*modified CSS*/
.tree ul li ul li{
    font-size:0.8em;
    font-weight:500;
}

.toggle {
  display: none;
}

.toggle.active {
  display: block;
}

/*BEGIN TREE CSS*/

.tree,
.tree ul {
  margin: 0;
  padding: 0;
  list-style: none
}
.tree ul {
  margin-left: 1em;
  position: relative
}
.tree ul ul {
  margin-left: .5em
}
.tree ul:before {
  content: "";
  display: block;
  width: 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  border-left: 1px solid
}
.tree li {
  margin: 0;
  padding: 0 1em;
  line-height: 2em;
  color: #369;
  font-weight: 700;
  position: relative
}
.tree ul li:before {
  content: "";
  display: block;
  width: 10px;
  height: 0;
  border-top: 1px solid;
  margin-top: -1px;
  position: absolute;
  top: 1em;
  left: 0
}
.tree ul li:last-child:before {
  background: #fff;
  height: auto;
  top: 1em;
  bottom: 0
}
.indicator {
  margin-right: 5px;
}
.tree li a {
  text-decoration: none;
  color: #369;
}
.tree li button,
.tree li button:active,
.tree li button:focus {
  text-decoration: none;
  color: #369;
  border: none;
  background: transparent;
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
  outline: 0;
}
    
</style>
<!-- ===  breadcrums  =====-->

            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.html" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">NACC DVV</span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
            </div>
<!-- ===  breadcrums  Ends =====-->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-element">
<!--Main content Starts -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
          <ul class="tree nav nav-pills nav-stacked">
            <li><a href="#panel-continent-overview"  class="tree-link">1. Curricular Aspects</a>
            <ul>
                    <li><a href="#">1.1 Curriculum Design and Development</a>
                        <ul>
                            <li><a href=""  class="tree-link" onclick="ReverseDisplay('c111')">1.1.1 Curricula developed and implemented  have relevance to the local, national, regional and global developmental needs which  is reflected in Programme outcomes (POs), Programme Specific Outcomes(PSOs) and Course Outcomes(COs) of the Programmes offered by the University</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.1.2 Percentage of Programmes where syllabus revision was carried out during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.1.3 Average percentage of courses having focus on employability/ entrepreneurship/ skill development offered by the University </a></li>
                    
                        </ul>
                    </li>
                    <li><a href="#">1.2 Academic Flexibility</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">1.2.1 Percentage of new courses introduced of the total number of courses across all programs offered during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.2.2 Percentage of Programmes in which Choice Based Credit System (CBCS)/elective course system has been implemented  (Data for the latest completed academic year)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">1.3 Curriculum Enrichment</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">1.3.1 Institution integrates crosscutting issues relevant to Professional Ethics ,Gender, Human Values ,Environment and Sustainability into the Curriculum </a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.3.2 Number of value-added courses for imparting transferable and life skills offered during last five years </a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.3.3 Average Percentage of students enrolled in the courses under 1.3.2 above</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.3.4 Percentage  of students undertaking  field projects / research projects / internships  (Data for the latest completed  academic year)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">1.4 Feedback System</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">1.4.1 Structured feedback for design and review of syllabus – semester wise / year wise is received from  1) Students, 2) Teachers, 3) Employers,  4) Alumni</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.4.2 Feedback processes of the institution may be classified as follows </a></li>
                        </ul>
                    </li>
            
            </ul>
            
            <!--<ul>
                <li><a href="#">1.1 Curriculum Design and Development</a>
                  <ul>
                    <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">1.1.1 Curricula developed and implemented  have relevance to the local, national, regional and global developmental needs which  is reflected in Programme outcomes (POs), Programme Specific Outcomes(PSOs) and Course Outcomes(COs) of the Programmes offered by the University</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.1.2 Percentage of Programmes where syllabus revision was carried out during the last five years</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">1.1.3 Average percentage of courses having focus on employability/ entrepreneurship/ skill development offered by the University </a>
                    </li>
                  </ul>
                </li>

                <li><a href="#">Country 2</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">Country Overview</a>
                    </li>
                    <li><a href="#">Cities</a>
                        <ul>
                            <li><a href="#panel-city-2120d7aa-2b93-4d0d-a42b-8c6fedc9333a"  class="tree-link">City P</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>

              </ul>-->
            </li>

            <li><a href="#">2. Teaching-Learning and Evaluation</a>
              <ul>
                <li><a href="#">2.1 Student Enrolment and Profile </a>
                  <ul>
                    <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">2.1.1 Demand Ratio</a></li>
                    <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">2.1.2 Average percentage of seats filled against reserved categories (SC, ST, OBC, Divyangjan, etc.) as per applicable reservation policy during the last five years</a></li>
                  </ul>
                </li>

                <li><a href="#">2.2 Catering to Student Diversity</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.2.1 The institution assesses the learning levels of the students and  organises special Programmes for advanced learners and slow learners</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.2.2 Student - Full time teacher ratio (Data for the latest completed academic year)</a></li>
                    </ul>
                </li>
                
                <li><a href="#">2.3 Teaching-Learning Process</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.3.1 Student centric methods, such as experiential learning, participative learning and problem solving methodologies are used for enhancing learning experiences</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.3.2 Teachers use ICT enabled tools including online resources for effective teaching and learning processes</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.3.3 Ratio of students to  mentor  for academic and other related issues (Data for the latest completed academic  year data)</a></li>
                    </ul>
                </li>
                
                <li><a href="#">2.4 Teacher Profile and Quality</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.4.1 Average percentage of full time teachers against sanctioned posts during the last five years</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.4.2 Average percentage of full time teachers with Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit. during the last five years</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.4.3 Average teaching experience of full time teachers in the same institution (Data for the latest completed academic year in number of years)</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.4.4 Average percentage of full time teachers who received awards, recognition, fellowships at State, National, International level from Government/Govt. recognised bodies during the last five years</a></li>
                    </ul>
                </li>
                <li><a href="#">2.5 Evaluation Process and Reforms</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.5.1 Average number of days from the date of last semester-end/ year- end examination till the declaration of  results during the last  five years</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.5.2 Average percentage of student complaints/grievances about evaluation against total number appeared in the examinations during the last five years</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.5.3 IT integration and reforms in the examination procedures and processes (continuous internal assessment and end-semester assessment) have brought in considerable improvement in examination management system of the institution</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.5.4 Status of automation of Examination division along with approved Examination Manual </a></li>
                    </ul>
                </li>
                <li><a href="#">2.6 Student Performance and Learning Outcomes</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.6.1 The institution has stated learning outcomes  (generic and programme specific)/graduate attributes which are integrated into the assessment process and widely publicized through the website and other documents</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.6.2 Attainment of Programme outcomes, Programme specific outcomes and course outcomes are evaluated by the institution</a></li>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.6.3 Average pass percentage of students (Data for the latest completed academic year in number of years)</a></li>
                    
                    </ul>
                </li>
                <li><a href="#">2.7 Student Satisfaction Survey</a>
                    <ul>
                    <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">2.7.1 Online student satisfaction survey regarding teaching learning process</a></li>
                    </ul>
                </li>
              </ul>
            </li>

            <li><a href="#">3. Research, Innovations and Extension</a>
              <ul>
                <li>
                  <a href="#">3.1 Promotion of Research and Facilities</a>
                  <ul>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.1 The institution Research facilities are frequently updated and  there is  well defined policy for promotion of research which  is uploaded on the institutional website and implemented</a></li>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.2 The institution provides seed money to its teachers for research (average per year INR in Lakhs)</a></li>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.3 Percentage  of teachers receiving national/ international fellowship/financial support by various agencies for advanced studies/ research  during the last five years</a></li>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.4 Number of JRFs, SRFs, Post Doctoral Fellows, Research Associates and other research fellows enrolled in the institution during the last five years</a></li>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.5 Institution has  the following facilities to support research</a></li>
                    <li><a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18"  class="tree-link">3.1.6 Percentage of departments with UGC-SAP, CAS, DST-FIST, DBT, ICSSR  and other recognitions by national and international  agencies (Data for the latest completed academic year)</a></li>
                  </ul>
                </li>

                <li>
                  <a href="#">3.2 Resource Mobilization for Research</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.2.1 Extramural funding for Research (Grants sponsored by the non-government sources such as industry, corporate houses, international bodies for research projects) endowments, Chairs in the University  during the last five years (INR in Lakhs)</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.2.2 Grants  for research projects sponsored by the government agencies during the last five years (INR in Lakhs)</a></li>
                    <li><a href="#">3.2.3 Number of research projects per teacher funded by government and  non-government agencies during the last five years</a></li>
                    </ul>
                </li>
                
                <li>
                  <a href="#">3.3 Innovation Ecosystem</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.3.1 Institution has created an eco system for innovations including Incubation centre and other initiatives for creation and transfer of knowledge</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.3.2 Number of workshops/seminars conducted on Research methodology, Intellectual Property Rights (IPR),entrepreneurship, skill development during the last five years</a></li>
                    <li><a href="#">3.3.3 Number of awards / recognitions received for research/innovations  by the institution/teachers/research scholars/students during the last five years</a></li>
                    </ul>
                </li>
                
                <li>
                  <a href="#">3.4 Research Publications and Awards</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.1 The institution ensures implementation of its  stated Code of Ethics for research  through the following</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.2 The institution provides incentives to teachers who receive state, national and international recognitions/awards</a></li>
                    <li><a href="#">3.4.3 Number of Patents published/awarded during the last five years</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.4 Number  of Ph.D’s awarded per teacher during the last five years</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.5 Number of research papers per teacher in the Journals notified on UGC website during the last five years</a></li>
                    <li><a href="#">3.4.6 Number of books and  chapters in edited volumes published, and papers in national/international conference-proceedings per teacher during the last five years</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.7 E-content is developed by teachers</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.4.8	QnM	Bibliometrics of the publications during the last five years based on average  Citation Index in Scopus/ Web of Science/PubMed</a></li>
                    <li><a href="#">3.4.9 Bibliometrics of the publications during the last five years based on Scopus/ Web of  Science – h-Index of the University</a></li>
                    
                    </ul>
                </li>
                
                <li>
                  <a href="#">3.5 Consultancy</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.5.1 Institution has a policy on consultancy including revenue sharing between the institution and the individual  and encourages its faculty to undertake consultancy</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.5.2 Revenue generated from consultancy and corporate training during the last five years (INR in Lakhs)</a></li>
                    </ul>
                </li>
                
                <li>
                  <a href="#">3.6 Extension Activities</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.6.1 Extension activities in the neighbourhood community in terms of impact and  sensitising students to social issues and holistic development during the last five years</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.6.2	Number of awards received by the Institution, its teachers and students from Government /Government recognised bodies in recognition of the extension activities carried out  during the last five years</a></li>
                    <li><a href="#">3.6.3 Number of extension and outreach programs conducted  by the institution including those through NSS/NCC/Red cross/YRC during the last five years (including  Government initiated programs such as Swachh Bharat, Aids Awareness, Gender Issue, etc. and those organised in collaboration with industry, community and NGOs)</a></li>
                    <li><a href="#">3.6.4 Average percentage of students participating in extension activities listed at 3.6.3 above during the last five years</a></li>
                    </ul>
                </li>
                
                <li>
                  <a href="#">3.7 Collaboration</a>
                    <ul>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.7.1 Number of collaborative activities with other institutions/ research establishment/industry for  research and  academic development of faculty and students per year</a></li>
                    <li><a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd"  class="tree-link">3.7.2 Number of functional MoUs with institutions/ industries in India and abroad for internship, on-the-job training, project work, student / faculty exchange and collaborative research during the last five years</a></li>
                    </ul>
                </li>
                
              </ul>
            </li>

            <li><a href="#">4. Infrastructure and Learning Resources</a>
                <ul>
                    <li><a href="#">4.1  Physical Facilities</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">4.1.1 The institution has adequate facilities for teaching - learning. viz., classrooms, laboratories, computing equipment, etc.</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.1.2 The institution has adequate facilities for cultural activities, yoga, games (indoor, outdoor) and sports. (gymnasium, yoga centre, auditorium, etc.)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.1.3 Availability of general campus facilities and overall ambience</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.1.4 Average percentage of expenditure excluding salary for infrastructure augmentation during the last five years (INR in Lakhs)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">4.2 Library as a Learning Resource</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">4.3.1 Percentage of classrooms and seminar halls with ICT - enabled facilities  such as  LCD, smart board, Wi-Fi/LAN, audio video recording facilities. (Data for the latest completed academic year)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.2.2 Institution has subscription for e-Library resources</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">4.2.3 Average annual expenditure for purchase of books/ e-books and subscription to journals/e-journals during the last five years (INR in Lakhs)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.2.4 Percentage per day usage of library by teachers and students ( foot falls and login data for online access) (Data for the latest completed academic year)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">4.3 IT Infrastructure</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">4.3.1 Percentage of classrooms and seminar halls with ICT - enabled facilities  such as  LCD, smart board, Wi-Fi/LAN, audio video recording facilities. (Data for the latest completed academic year)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.3.2 Institution has an IT policy, makes appropriate budgetary provision and updates its IT facilities including Wi-Fi facility</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.3.3 Student - Computer ratio (Data for the latest completed academic year)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.3.4 Available bandwidth of internet connection in the Institution (Leased line)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.3.5 Institution has the following Facilities for e-content development</a></li>
                        </ul>
                    </li>
                    <li><a href="#">4.4 Maintenance of Campus Infrastructure</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">4.4.1 Average percentage expenditure incurred on maintenance of physical facilities and academic support facilities excluding salary component during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">4.4.2 There are established systems and procedures for maintaining and utilizing physical, academic and support facilities - laboratory, library, sports complex, computers, classrooms etc</a></li>
                        </ul>
                    </li>
            
            </ul>
            </li>
            
            <li><a href="#">5. Student Support and Progression</a>
                <ul>
                    <li><a href="#">5.1 Student Support</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">5.1.1 Average percentage of students benefited by scholarships and  freeships provided by the institution, Government and non-government agencies (NGOs) during the last five years (other than the students receiving scholarships under the government schemes for reserved categories)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.1.2 Average percentage of students benefited by career counseling and guidance for competitive examinations offered by the Institution during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.1.3 Following Capacity  development and skills enhancement initiatives are taken by the institution</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.1.4 The Institution adopts  the following  for redressal of student grievances including sexual harassment and ragging cases</a></li>
                        </ul>
                    </li>
                    <li><a href="#">5.2 Student Progression</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">5.2.1 Average percentage of students qualifying in state/ national/ international level examinations during the last five years (eg: NET/SLET/GATE/GMAT/ CAT/GRE/TOEFL/Civil Services/State government examinations)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.2.2 Average percentage of placement of outgoing students during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.2.3 Percentage of recently graduated students who have progressed to higher education (previous graduating batch)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">5.3 Student Participation and Activities</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">5.3.1 Number of awards/medals  won by students for outstanding performance in sports/cultural activities at  inter-university/state/national/international events (award for a team event should be counted as one) during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.3.2 Presence of Student Council and its activities for institutional development and student welfare</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.3.3 Average number of sports and cultural events / competitions organised by the institution per year</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="#">5.4 Alumni Engagement</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">5.4.1 The Alumni Association/Chapters (registered and functional) contributes significantly to the development of the institution through financial and other support services during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">5.4.2 Alumni contribution during the last five years (INR in lakhs)</a></li>
                        </ul>
                    </li>
            
            </ul>
            </li>
          
          <li><a href="#">6. Governance, Leadership and Management</a>
                <ul>
                    <li><a href="#">6.1	Institutional Vision and Leadership</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.1.1 The institution has a clearly stated vision and mission which are reflected in its academic and administrative governance</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.1.2 The effective leadership is reflected in various institutional practices such as decentralization and participative management</a></li>
                        </ul>
                    </li>
                    <li><a href="#">6.2	Strategy Development and Deployment</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.2.1 The institutional Strategic plan is effectively deployed</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.2.2 The functioning of the institutional bodies is effective and efficient as visible from policies, administrative setup, appointment and service rules, procedures, etc</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.2.3 e-Governance is implemented covering following areas of operation</a></li>
                        </ul>
                    </li>
                    <li><a href="#">6.3 Faculty Empowerment Strategies</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.3.1 The institution has a performance appraisal system, promotional avenues and effective welfare measures for teaching and non-teaching staff</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.3.2 Average percentage of teachers provided with financial support to attend conferences / workshops and towards membership fee of professional bodies during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.3.3 Average number of professional development / administrative training  Programmes organized by the institution for teaching and non teaching staff during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.3.4 Average percentage of teachers undergoing online/ face-to-face  Faculty Development Programmes (FDP)during the last five years  (Professional Development Programmes, Orientation / Induction Programmes, Refresher Course, Short Term Course )</a></li>
                        </ul>
                    </li>
                    <li><a href="#">6.4 Financial Management and Resource Mobilization</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.4.1 Institutional strategies for mobilisation of funds and the optimal utilisation of resources</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.4.2 Funds / Grants received from government bodies during the last five years for development and maintenance of infrastructure (not covered under Criteria III and V )(INR in Lakhs)</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.4.3 Funds / Grants received from non-government bodies, individuals, philanthropists during the last five  years for development and maintenance of infrastructure (not covered under Criteria III and V )(INR in Lakhs)</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.4.4 Institution conducts internal and external financial  audits regularly</a></li>
                        </ul>
                    </li>
                    <li><a href="#">6.5 Internal Quality Assurance System (IQAS)</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">6.5.1 Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the quality assurance strategies and processes by constantly reviewing the teaching learning process, structures & methodologies of operations and learning outcomes at periodic intervals</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.5.2 Institution  has adopted the following for  Quality assurance</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">6.5.3 Incremental improvements made for the preceding five years with regard to quality  (in case of first cycle)</a></li>
                        </ul>
                    </li>

            
            </ul>
            </li>
            
            <li><a href="#">7. Institutional Values and Best Practices</a>
                <ul>
                    <li><a href="#">7.1 Institutional Values and Social Responsibilities</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.1.1 Measures initiated by the Institution for the promotion of gender equity during the last five years</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.2 The Institution has facilities for alternate sources of energy and energy conservation measures</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.3 Describe the facilities in the Institution for the management of the following types of degradable and non-degradable waste (within 500 words). Solid waste management, Liquid waste management, Biomedical waste management, E-waste  management, Waste recycling system, Hazardous chemicals and radioactive waste management</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.4 Water conservation facilities available in the Institution</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.1.5 Green campus initiatives</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.6 Quality audits on environment and energy are regularly undertaken by the institution</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.1.7 The Institution has disabled-friendly,  barrier free environment</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.8 Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance and harmony towards cultural, regional, linguistic, communal socioeconomic and other diversities (within 500 words)</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.1.9 Sensitization of students and employees of the Institution to the constitutional obligations: values, rights, duties and responsibilities of citizens</a></li>
                            <li><a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1"  class="tree-link">7.1.10 The Institution has a prescribed code of conduct for students, teachers, administrators and other staff and conducts periodic programmes in this regard</a></li>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.1.11 Institution celebrates / organizes national and international commemorative days, events and festivals</a></li>
                        </ul>
                    </li>
                    <li><a href="#">7.2 Best Practices</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.2.1 Describe two best practices successfully implemented by the Institution as per NAAC format provided in the Manual. (please provide as annexures)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">7.3 Institutional Distinctiveness</a>
                        <ul>
                            <li><a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0"  class="tree-link">7.3.1	QlM	Portray  the performance of the Institution in one area distinctive to its priority and thrust within 1000 words</a></li>
                        </ul>
                    </li>
                    
            </ul>
            </li>
            
          </ul>
        </div>

        <div class="col-sm-8">
          <div class="toggle" id="c111">
                <h4>Curricular Aspects</h4>
                <hr/>
                <a href="#">PDF1</a><br/>
                <a href="#">PDF2</a><br/>
                <a href="#">PDF3</a><br/>
                <!--<strong>Continent Details</strong>-->
              </div>
          
          <div class="tabbable" id="tabbable-proj">
            <ul id="hidden-tabs"  role="tablist" aria-expanded="false">
              <li>
                <a href="#panel-continent-overview" aria-controls="panel-continent-overview" role="tab" data-toggle="tab"></a>
              </li>
              
              <li>
                <a href="#panel-country-9400470e-fa49-46ea-b587-2ceb108600c0" aria-controls="panel-country-9400470e-fa49-46ea-b587-2ceb108600c0" role="tab" data-toggle="tab"></a>
              </li>

              <li>
                <a href="#panel-country-45f97844-9773-4059-bafd-a2782fc06db1" aria-controls="panel-country-45f97844-9773-4059-bafd-a2782fc06db1" role="tab" data-toggle="tab"></a>
              </li>

              <li>
                <a href="#panel-city-2120d7aa-2b93-4d0d-a42b-8c6fedc9333a" aria-controls="panel-city-2120d7aa-2b93-4d0d-a42b-8c6fedc9333a" role="tab" data-toggle="tab"></a>
              </li>

              <li>
                <a href="#panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18" aria-controls="panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18" role="tab" data-toggle="tab"></a>
              </li>

              <li>
                <a href="#panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd" aria-controls="panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd" role="tab" data-toggle="tab"></a>
              </li>

              <li>
                <a href="#panel-neighborhood-f3fd5e2f-583d-4ccb-b163-03e118896f71" aria-controls="panel-neighborhood-f3fd5e2f-583d-4ccb-b163-03e118896f71" role="tab" data-toggle="tab"></a>
              </li>


              <li>
                <a href="#panel-neighborhood-319d56ac-286f-4afa-af42-5ec74bbcac19" aria-controls="panel-neighborhood-319d56ac-286f-4afa-af42-5ec74bbcac19" role="tab" data-toggle="tab"></a>
              </li>
            </ul>

            <div class="tab-content main-tab-content">
              <div class="tab-pane fade in active" id="panel-continent-overview">
                <center><h4>Welcome to Self Study Report</h4></center>
                <hr/>
                <!--<strong>Continent Details</strong>-->
              </div>
              

              <div class="tab-pane fade" id="panel-country-9400470e-fa49-46ea-b587-2ceb108600c0">
                <strong>Country 1 Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-country-45f97844-9773-4059-bafd-a2782fc06db1">
                <strong>Country 2 Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-city-2120d7aa-2b93-4d0d-a42b-8c6fedc9333a">
                <strong>City P Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-neighborhood-babea547-cfb6-4e12-8c4a-bbbb25068d8a">
                <strong>Neighborhood Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-city-b4a991ce-80ef-4406-b1d2-9892c0d93d18">
                <strong>City A Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-city-2e6f1227-66d0-4061-9243-bf6cf4feaabd">
                <strong>City B Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-neighborhood-f3fd5e2f-583d-4ccb-b163-03e118896f71">
                <strong>Neighborhood X Details</strong>
              </div>

              <div class="tab-pane fade" id="panel-neighborhood-319d56ac-286f-4afa-af42-5ec74bbcac19">
                <strong>Neighborhood T Details</strong>
              </div>

            </div>
          </div>
          
        </div>
        
    </div>
</div>
<!--Main content ends-->
</div>
</div>
</div>


<script>
    // ***************** BEGIN TREE JS ***************** 
$.fn.extend({
  treed: function() {
    return this.each(function() {
      //initialize each of the top levels
      var tree = $(this);
      tree.addClass("tree");
      tree.find('li').has("ul").each(function() {
        var branch = $(this); //li with children ul
        //branch.prepend("<i class='indicator glyphicon glyphicon-plus-sign'></i>");
        branch.addClass('branch');
        branch.on('click', function(e) {
          if (this == e.target) {
            var icon = $(this).children('i:first');
            //icon.toggleClass("glyphicon-minus-sign glyphicon-plus-sign");
            $(this).children().children().toggle();
          }
        })
        branch.children().children().toggle();
      });
      //fire event from the dynamically added icon
      $('.branch .indicator').on('click', function() {
        $(this).closest('li').click();
      });
      //fire event to open branch if the li contains an anchor instead of text
      $('.branch a').on('click', function(e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
      //fire event to open branch if the li contains a button instead of text
      $('.branch button').on('click', function(e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
    });
  }
});


$('.tree').treed();
//*****************  END TREE JS *****************
$(document).ready(function() {
  $("a.tree-link").on('click', function (event) {
    var hrefTab = $(this).attr('href');
    $('#hidden-tabs a[href='+hrefTab+']').tab('show');
  });
});
</script>

<script>
function ReverseDisplay(d) {
    //alert(d);
  var els = document.querySelectorAll('.toggle.active:not(#' + d + ')');
  for (var i = 0; i < els.length; i++) {
    els[i].classList.remove('active');
  }
  document.getElementById(d).classList.toggle('active')

}

</script>