<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title>Data-Design</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h1>Data Design Medium</h1>
		<h2>Persona:</h2>
		<ul>
			<li><strong>Name:</strong> James Horrox</li>
			<li><strong>Gender:</strong> Male</li>
			<li><strong>Age:</strong> 56</li>
			<li><strong>Technology:</strong> Inspiron 15 7000 with Dell wireless keyboard and mouse, KM636.</li>
			<ul>
				<li><strong>Device:</strong> Dell Inspiron 15 7000 with Dell wireless keyboard and mouse. Windows 				10.</li>
				<li><strong>Proficiency:</strong> Advanced; Helps government and private businesses prepare books and
					journals articles manuscripts for publication.</li>
				<li><strong>Does he love or hate it?</strong> Mr. Horrox loves Microsoft products and uses them
				exclusively.</li>
			</ul>
			<li><strong>Attitudes and Needs:</strong></li>
			<ul>
				<li>Mr. Horrox is currently a freelance editor. He has a Ph.D and previously taught in various Universities.
					As an editor, Horrox has worked in a variety of industries in 40+ countries. Mr. Horrox is also a
					researcher in the field of publications in humanities and social sciences. He needs a site where he can
					post his writings.</li>
				<li>Mr. Horrox prefers sites that provide a seamless UX experience. This way he can concentrate on writing
					and posting his works rather than having to think about <strong>how</strong> to post them.</li>
			</ul>
		</ul>
		<h2>User Stories</h2>
		<p>As a registered user, I want to post my writing online and obtain feedback.</p>
		<h2>Use Cases:</h2>
		<p>Mr. Horrox has just signed up for Medium.com and wants to start writing and posting his works.</p>
		<p><em>precondition:</em> Mr. Horrox needs to sign into his account.</p>
		<p><em>postcondition:</em> Mr. Horrox successfully posts his works on the website.</p>
		<h2>Interaction Flow:</h2>
		<ol>
			<li>User enters his username and password.</li>
			<li>The site verifies credentials and allows access.</li>
			<li>User begins writing and select post.</li>
			<li>System asks user to confirm they would like to post.</li>
			<li>User clicks yes to confirm the action.</li>
			<li>The site posts the users work.</li>
			<li>User clicks logout to exit the system.</li>
			<li>System logs user out of site.</li>
		</ol>
		<h2>Entities and Attributes</h2>
		<p><strong>Profile (Entity):</strong></p>
		<ul>
			<li>profileId (Primary Key)</li>
			<li>profileFirstName</li>
			<li>profileLastName</li>
			<li>profileEmail</li>
			<li>profileHash</li>
			<li>profileSalt</li>
			<li>profileAboutMe</li>
		</ul>
		<p><strong>Blog (Entity)</strong></p>
		<ul>
			<li>blogId (Primary Key)</li>
			<li>blogTitle</li>
			<li>blogContent</li>
			<li>blogProfileId (Foreign Key)</li>
			<li>blogDate</li>
		</ul>
		<p><strong>Clap (Entity)</strong></p>
		<ul>
			<li>clapId (primary key)</li>
			<li>clapProfileId (foreign key)</li>
			<li>clapBlogId (foreign key)</li>
			<li>clapDate</li>
		</ul>
		<p><strong>Relations</strong></p>
		<ul>
			<li>One user can write many blogs - (1 to n)</li>
			<li>Many users can clap for many blogs - (m to n)</li>
		</ul>
		<h2>ERD:</h2>
		<img src="erd-diagram.JPG" alt="erd diagram">
	</body>
</html>
