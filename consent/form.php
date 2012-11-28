<html>
	<head>
		<style>
            @import url("http://fonts.googleapis.com/css?family=Tangerine");
            html {
                background:#DDD;
            }
            body {
                background:#FFF;
                margin:15px auto;
                width:800px;
                border:1px solid #CCC;
                box-shadow:0 1px 2px #000;
                padding:1em 100px;
                font:11pt Arial;
            }
            img {
                display:block;
                width:70%;
                margin:50px auto;
            }
            h1 {
                text-align:center;
            }
            h2 {
                margin-bottom:0;
                text-decoration:underline;
            }
            p {
                margin:5px 0 1em 0;
            }
            input[type=text],input[type=email] {
                display:inline-block;
                border:0;
                border-bottom:1px solid #000;
                background:#DEF;
                vertical-align:bottom;
                width:200px;
                font-size:12pt;
                padding:2px 10px;
            }
            input.sig {
                font-family:'Tangerine',cursive;
                font-size:32pt;
                height:50px;
                width:300px;
                padding:6px 2px 2px 2px;
            }
            input[type=submit] {
                display:block;
                box-shadow:0 1px 2px #000;
                margin:0 auto;
                padding:10px;
                font-size:14pt;
            }
		</style>
	</head>
	<body>
		<img src="logo.jpg" />
		<h1>CONSENT FORM</h1>
		<h1>DATA INPUT FROM LONG DATA SETS</h1>
        
        <h2>INTRODUCTION</h2>
        <p>The purpose of this form is to provide you (as a prospective research study participant) with information that may affect your decision as to whether to participate in this research and to record the consent of those who agree to be involved in the study.</p>

		<h2>RESEARCHER</h2>
		<p>Mr. Chris Hallberg, Student Researcher, Department of Computing Sciences, Principal Investigator, has invited your participation in a research study.</p>

		<h2>STUDY PURPOSE</h2>
		<p>The purpose of the project is to analyze different methods of data entry into a web page.</p>

		<h2>DESCRIPTION OF RESEARCH STUDY</h2>
		<p>If you decide to participate, then you will join a study being conducted for the Villanova course User System Interface. You will be asked to go to a given web address on your Internet connected computer or mobile device and complete an online form.</p>

		<p>If you say YES, then you will be expected to fill out the form before November 20th, 2012, but you have the option of not filling it out if you are not comfortable and may stop filling out the form anytime before submission.</p>

		<h2>RISKS</h2>
		<p>There are no known risks from taking part in this study, but in any research there is some possibility that you may be subject to risks that have not yet been identified.</p>

		<h2>BENEFITS</h2>
		<p>Although there may be no direct benefits to you, the possible benefits of your participation in the research are the improvement of online web forms for faster and more efficient data entry.</p>

		<h2>CONFIDENTIALITY</h2>
		<p>All information obtained in this study is strictly confidential. The results of this research study may be used in reports, presentations, and publications, but the researchers will not identify you. In order to maintain confidentiality of your records, Mr. Hallberg will keep all responses in secure physical and electronic locations to which only the three research team members will have access.</p>

		<h2>WITHDRAWAL PRIVILEGE</h2>
		<p>Participation in this study is completely voluntary. It is all right for you to say NO. Even if you say YES now, you are free to say NO later and to withdraw from the study at any time.</p>

		<h2>COSTS AND PAYMENTS</h2>
		<p>There is no cost and no payment for your participation in the study.</p>

		<h2>VOLUNTARY CONSENT</h2>
		<p>Any questions you have concerning the research study or your participation in the study, before or after your consent, will be answered by Mr. Hallberg, crhallberg@gmail.com, 908-268-1033, 109 Radnor Ave., Villanova, PA 19045.  If you have questions about your rights as a subject/participant in this research, or if you feel you have been placed at risk, you can contact the Institutional Review Board at Villanova University through its chairperson, Dr. Suzanne Smeltzer, suzanne.smeltzer@villanova.edu, 610-519-6828.</p>

		<p>This form explains the nature, demands, benefits and any risk of the project.  By signing this form you agree knowingly to assume any risks involved.  Remember, your participation is voluntary.  You may choose not to participate or to withdraw your consent and discontinue participation at any time without penalty or loss of benefit.  In signing this consent form, you are not waiving any legal claims, rights, or remedies.  A copy of this consent form will be given (offered) to you.</p>

		<p>Your signature below indicates that you consent to participate in the above study.</p>
        <form action="save.php" method="POST">
            <p>Subject's Signature: <input class="sig" name="name" type="text"> Email: <input name="email" type="email"> Date: <u><?=date("m/d/Y") ?></u></p>
            <p>Legal Authorized Representative (if applicable): <input name="legalname" type="text"> Email: <input name="legalemail" type="email"></p>
            <br><br>
            <input type="submit" value="I Give My Consent">
        </form>
	</body>
</html>
