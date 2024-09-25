<style type="text/css">
	*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
text-decoration: none;
list-style: none;
scroll-behavior: smooth;
}
:root{
--bg-color: #2a2a2a;
--second-bg-color: #202020;
--red-color: #990000;
--2text-color: #0d0d0d;
--text-color: #fff;
--second-color: #ccc;
--yellow-color: #FFD700;
--main-color: #ff4d05;
--big-font: 5rem;
--h2-font: 3rem;
--p-font: 1.1rem;
}
body{
background: var(--bg-color);
color: var(--text-color);
}

*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
text-decoration: none;
list-style: none;
scroll-behavior: smooth;
}
:root{
--bg-color: #2a2a2a;
--second-bg-color: #202020;
--red-color: #660000;
--2text-color: #0d0d0d;
--text-color: #fff;
--second-color: #ccc;
--yellow-color: #FFD700;
--main-color: #ff4d05;
--big-font: 5rem;
--h2-font: 3rem;
--p-font: 1.1rem;
}
body{
background: var(--bg-color);
color: var(--text-color);
}

/*-------- login Design -------*/
/*.form-popup{
position: fixed;
top: 50%;
left: 50%;
max-width: 720px;
width: 100%;
color: var(--2text-color);
background: #fff;
border: 2px solid #fff;
transform: translate(-50%, -50%);
}
.form-popup .form-box{
display: flex;
}
.form-box .form-details{
max-width: 330px;
width: 100%;
color: var(--red-color);
display: flex;
text-align: center;
flex-direction: column;
align-items: center;
justify-content: center;
background: url(centralpic/festival.jpg);
background-size: cover;
background-position: cover;

}

.form-box h2{
text-align: center;
margin-bottom: 30px;
}
.form-box .form-content{
width: 100%;
padding: 35px;
}
.form .input-field{
height: 50px;
width: 100%;
margin-top: 20px;
position: relative;
}
.form .input-field .input{
width: 100%;
height: 100%;
outline: none;
padding: 0 15px;
font-size: 0.95rem;
border-radius: 3px;
border: 1px solid #717171;
}
.form .input-field label{
position: absolute;
top: 50%;
left: 15px;
transform: translateY(-50%);
color: #717171;
pointer-events: none;
transform: translateY(-50%);
transition: 0.2s ease;
}
.input-field .input:is(:focus, :valid) ~ label{
color: #990000;
font-size: 0.75rem;
transform: translateY(-120%);
}
.input-field .input:is(:focus, :valid){
padding: 16px 15px 0;
}
.input-field .input:focus{
border-color: #990000;
}
.form-box #forgot{
color: #990000;
text-decoration: none;
}
.form-box #forgot:hover{
text-decoration: underline;
}
.form .login{
width: 100%;
outline: none;
border: none;
font-size: 1rem;
font-weight: 600;
padding: 14px 0;
border-radius: 3px;
margin: 25px 0;
color: #fff;
cursor: pointer;
background: var(--red-color);
transition: 0.2s ease;
}
.form .login:hover{
background: #de0202;
}
.form-box .forgot-pass{
display: inline-flex;
margin-top: 14px;
font-size: 0.95rem;
}
.form-box .bottom-link{
text-align: center;
}*/

/*-------- header design -------*/
header{

position: fixed;
width: 100%;
top: 0;
right: 0;
z-index: 1000;
display: flex;
align-items: center;
justify-content: space-between;
background: transparent;
padding: 22px 15%;
border-bottom: 1px solid transparent;
transition: all .45s ease;
background: var(--red-color);
}
.logo{
color: var(--text-color);
font-size: 35px;
font-weight: 700;
letter-spacing: 1px;
}
.yellow{
color: var(--yellow-color);
}
#red {
color: var(--red-color);
}
.navlist{
display: flex;
}
.navlist a{
color: var(--second-color);
font-size: 17px;
font-weight: 500;
margin: 0 25px;
transition: all .45s ease;
}

.navlist a:hover{
color: var(--yellow-color);
}

.navlist a.active{
color: var(--yellow-color);
}

#menu-icon{
font-size: 35px;
color: var(--text-color);
z-index: 10001;
cursor: pointer;
margin-left: 25px;
display: none;
}
section{
padding: 160px 15% 120px;
}
.login-btn{
width: 200px;
height: 50px;
display: inline-block;
font-size: 15px;
background: var(--text-color);
color: var(--2text-color);
border: none;
box-shadow: 1px 3px 10px;
border-radius: 20px;
transition: all .45 ease;
cursor: pointer;
}
.login-btn:hover{
background: var(--red-color);
color: var(--text-color);
}

    /*----- home design -------*/
.home{
position: relative;
height: 100vh;
width: 100%;
background-image: url(centralpic/hrbuildingnew.jpg);
background-size: cover;
background-position: center;
display: flex;
align-items: center;
justify-content: flex-start;
}
.home-text h1{
font-size: var(--big-font);
font-weight: 700;
color: var(--yellow-color);
list-style: 1.1;
margin: 0 0 8px;
}
.home-text p{
font-size: var(--p-font);
line-height: 1.8;
margin-bottom: 40px;
}
#bts{
color: var(--yellow-color);
}
.btn2{
display: inline-flex;
align-items: center;
justify-content: center;
font-size: 15px;
font-weight: 600;
color: var(--text-color);
margin-left: 35px;
}
.btn2 #bts i {
height: 55px;
width: 55px;
background: var(--red-color);
color: var(--text-color);
display: flex;
align-items: center;
justify-content: center;
font-size: 35px;
border-radius: 50%;
margin-right: 15px;
transition: all .45s ease;
}
.btn2 #bts i:hover{
transform: scale(1.1) translateY(5px);
}
header.sticky{
background: var(--red-color);
border-bottom: 1px solid #ffffff1a;
padding: 12px 15%;
}

/*--------- About Design ---------*/

.about{
display: grid;
grid-template-columns: repeat(2, 1fr);
align-items: center;
gap: 1.5rem;
}

.about-img img{
max-width: 530px;
height: auto;
width: 100%;
border-radius: 8px;
}

.about-text h2{
font-size: var(--h2-font);
line-height: 1;
}
.ccp{
color: var(--yellow-color);
}
.about-text h4{
font-size: 24px;
font-weight: 600;
color: var(--text-color);
line-height: 1.7;
margin: 15px 0 30px;
}
.about-text p{
color: var(--second-color);
font-size: var(--p-font);
line-height: 1.6;
margin-bottom: 4rem;
}

/*------ Services Design ---------*/

.services {
background: var(--second-color);
}

.main-text{
text-align: center;
}

.main-text p{
/*color: var(--2text-color);*/
font-size: 15px;
margin-bottom: 15px;
}
.main-text #ans{
color: var(--2text-color);
}

.main-text h2{
font-size: var(--h2-font);
line-height: 1;
}

.main-text .red{
color: var(--red-color);
}

.services-content{
color: var(--2text-color);
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px,auto));
justify-content: center;
/*align-items: center;*/
gap: 2.5rem;
margin-top: 5rem;
}

.box {
background: #ffff;
padding: 35px 45px;
border-radius: 8px;
transition: all .45s ease;

}

.s-icons i {
font-size: 32px;
margin-bottom: 20px;
}

.box h3{
font-size: 29px;
font-weight: 600;
color: var(--2text-color);

}

.box p{
color: var(--2text-color);
font-size: 1rem;
line-height: 1.8;
margin-bottom: 25px;
}

/*.read{

}

.read:hover{

}*/

.box:hover{
transform: translateY(-8px);
cursor: pointer;
}


/*------ Courses Design ---------*/

.courses-content {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(350px,auto));
justify-content: center;
gap: 2.5rem;
margin-top: 5rem;
}
.row {
position: relative;
overflow: hidden;
border-radius: 8px;
cursor: pointer;
}
.row img {
width: 100%;
border-radius: 8px;
display: block;
transition: transform 0.5s;
}
.layer {
width: 100%;
height: 0;
background: linear-gradient(rgba(0,0,0,0.1), #990000);
position: absolute;
border-radius: 8px;
left: 0;
bottom: 0;
overflow: hidden;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
text-align: center;
padding: 0 40px;
transition: height 0.5s;
}
.layer h5{
font-size: 20px;
font-weight: 600;
margin-bottom: 15px;
}
.layer p {
color: var(--text-color);
font-size: 1rem;
line-height: 1.8;
}
.layer i {
color: var(--yellow-color);
margin-top: 20px;
font-size: 20px;
background: var(--bg-color);
width: 60px;
height: 60px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
}
.row:hover img{
transform: scale(1.1);
}
.row:hover .layer{
height: 100%;
}

/*------ Contact Us Design ---------*/

.contact-text .red{
color: var(--red-color);
}
.contact {
background: var(--second-color);
display: grid;
grid-template-columns: repeat(2, 1fr);
align-items: center;
gap: 2.5rem;
/*color: var(--2text-color);*/
}
.contact-text h4{
color: var(--2text-color);
}
.contact-text h2{
font-size: var(--h2-font);
line-height: 1;
}
.contact-text p{
color: var(--2text-color);
font-size: var(--p-font);
line-height: 1.8;
margin-bottom: 30px;
}
.list{
margin-bottom: 2.8rem;
}
.list li{
margin-bottom: 12px;
}
.list li a {
display: block;
color: var(--2text-color);
font-size: 14px;
transition: all .45s ease;
}
.list li a:hover{
color: var(--2text-color);
transform: translateX(5px);
}
.contact-icons i{
height: 45px;
width: 45px;
background: var(--red-color);
color: var(--text-color);
font-size: 22px;
display: inline-flex;
align-items: center;
justify-content: center;
border-radius: 8px;
margin-right: 15px;
transition: all .45s ease;

}
.contact-icons i:hover{
background: var(--2text-color);
color: var(--red-color);
}

.contact-form form{
position: relative;
}
.contact-form form input, form textarea{
width: 100%;
padding: 14px;
background: #fff;
color: var(--2text-color);
border: none;
outline: none;
font-size: 15px;
border-radius: 8px;
margin-bottom: 10px;
}
.contact-form textarea {
resize: none;
height: 240px;
}
.contact-form .submit {
display: inline-block;
font-size: 16px;
background: var(--red-color);
color: var(--text-color);
width: 160px;
transition: all .45 ease;
}
.contact-form .submit:hover{
transform: scale(1.1);
cursor: pointer;
}

/*------ Responsive Design ---------*/

footer{
padding: 160px 15% 120px;
}
.end{
padding: 20px 15%;
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
gap: 2rem;
background: var(--yellow-color);
}
.last-text p{
color: var(--2text-color);
font-size: 14px;
}
.top i{
padding: 10px;
border-radius: 8px;
font-size: 15px;
color: var(--text-color);
background: var(--red-color);
}

@media (max-width: 1480px){
header{
padding: 12px 2.5%;
transition: .1s;
}
header.sticky{
padding: 10px 2.5%;
transition: .1s;
}
section{
padding: 110px 3% 60px;
}
footer{
padding: 110px 3% 60px;
}
.end{
padding: 15px 3%;
}
}

@media (max-width: 1100px){
:root{
--big-font: 4rem;
--h2-font: 2.5rem;
--p-font: 1rem;
transition: .1s;
}
.home-text h2{
font-size: 2.5rem;
}
.home{
height: 87vh;
}
}

@media (max-width: 920px){
.about{
grid-template-columns: 1fr;
}
.about-img{
text-align: center;
order: 2;
}
.about-img img{
width: 100%;
height: auto;
max-width: 100%;
}
.contact{
grid-template-columns: 1fr;
}
}

@media (max-width: 840px){
#menu-icon{
display: block;
}
.navlist{
position: absolute;
top: -1000px;
right: 0;
left: 0;
display: flex;
flex-direction: column;
background: var(--second-color);
text-align: left;
transition: all .45s ease;
}
.navlist a {
display: block;
margin: 17px;
font-size: 20px;
transition: all 45ease;
color: var(--2text-color);
}
.navlist a:hover{
background: var(--yellow-color);
color: var(--text-color);
}
.navlist a.active{
color: var(--text-color);
}
.navlist.open{
top: 100%;
}
}
.div-1{
	text-align: center;
   margin: 0;
    position: absolute;
    top: 50%;
    left: 25%;    
    transform: translate(-50%, -50%)  ;


}
table {
    width: 50%;
    height:70%;
    display:block;
      margin: 0;
    position: absolute;
    top: 50%;
    left: 70%;    
    transform: translate(-50%, -50%)  ;
    background-color: white;

}
thead {
    display: inline-block;
    width: 100%;
    height: 20px;
}
th{
  background-color: #660000;
  color:yellow;


}
td{
	background-color: white;
	color:#660000;
	text-align: center;
}
tbody {
    height: 475px;
    display: inline-block;
    width: 100%;
    overflow: auto;
   
}
table, th, td {    
border: 1px solid black;  
margin-left: auto;  
margin-right: auto;  
border-collapse: collapse;    
width: 1000px;  
 
font-size: 20px;  
border-color: blackpurple;
}  
table{
  background-color:  WHITE ;
  

   box-shadow: 10px 10px 20px black;

}
input[type=text] {
  width: 50%;
  background: white;
  border: 1px solid maroon;
  height: 100%;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: center;
  font-size: 20px;
  color: black;
}
input[type=select] {
  width: 50%;
  background: white;
  border: 1px solid maroon;
  height: 100%;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: center;
  font-size: 20px;
  color: black;
}
select{
	width: 50%;
  background: white;
  border: 1px solid maroon;
  height: 100%;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: center;
  font-size: 20px;
  color: black;
  border-color: maroon;
box-shadow: 10px 10px 20px black;
}
.tols{
	width: 100%;
	    margin: 0;
    position: absolute;
    top: 98%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    border-radius: 3%;
}  
h1{
	color:yellow;
}
h2{
	color:yellow;
}
</style>