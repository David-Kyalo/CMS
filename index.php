<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav class="nav">
        <a href="#" class="nav-item is-active" active-color="orange">Home</a>
        <a href="#About" class="nav-item" active-color="green">About</a>
        <a href="#Testimonials" class="nav-item" active-color=" blue">Testimonials</a>
        <a href="#Contact" class="nav-item" active-color="red">Contact</a>
        <a href="#" class="nav-item" active-color="purple">Feedback</a>
        
         <span class="nav-indicator"></span>
         </nav>

    <div class="container">
        <div class="split left">
          <h1>ADMIN/CARETAKER</h1>
          <a href="login.php" class="button">Login as Admin</a>          
        </div>
        <div class="split right">
          <h1>The Resident</h1>
          <a href="complaint.php" class="button">Resident Login</a>
        </div>
      </div>


      <section  id="About">
        <div class="container" style="display: flex; flex-wrap: wrap; align-items: center;">
            <div class="content" style="flex: 1; padding: 20px;">
                <h2 style="color: #E2E2B6; text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 36px;"><u>ABOUT US</u></h2>
                <p style="color: #E2E2B6; font-family: 'Georgia', serif; font-size: 18px; line-height: 1.6;">
                    Our residential complaint management system is designed to streamline the process of reporting and resolving issues in residential communities. It provides a centralized platform for residents to submit complaints, track their status, and communicate with property managers. The system is easy to use, efficient, and transparent, ensuring that issues are addressed promptly and effectively.
                    <br><br>
                    Whether you're a property manager, homeowner, or tenant, our system can help you manage complaints more effectively and improve the overall living experience in your community. We believe in fostering a harmonious living environment where issues are dealt with swiftly and professionally, enhancing the quality of life for everyone involved.
                    <br><br>
                    Our dedicated team is committed to continuous improvement, ensuring that our system evolves to meet the changing needs of residential communities. Trust in our system to provide the reliability and support necessary for a well-managed and pleasant living environment. Experience the difference with our cutting-edge solution tailored for modern residential management.
                </p>
            </div>
            <div class="image" style="flex: 1; padding: 20px; text-align: center;">
                <img src="pexels6.jpg" alt="About Us Image" style="max-width: 90%; height: 90%; margin-right: 0px;">
            </div>
        </div>
    </section>

      <section class = "bodyrere" id="Testimonials">
      <div class="slider">
      <h2 style="color: #E2E2B6; text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 36px;"><u>TESTIMONIALS</u></h2>
		<input type="radio" name="testimonial" id="t-1">
		<input type="radio" name="testimonial" id="t-2">
		<input type="radio" name="testimonial" id="t-3" checked>
		<input type="radio" name="testimonial" id="t-4">
		<input type="radio" name="testimonial" id="t-5">
		<div class="testimonials">
			<label class="item" for="t-1">
				<img src="pexels3.jpg" alt="picture">
				<p>"The complaint management system has been a game-changer for our community. Reporting issues has never been easier, and the response time has significantly improved."</p>
				<h2>- Sarah Lumumba
                Resident since 2021</h2>
			</label>
			<label class="item" for="t-2">
				<img src="pexels4.jpg" alt="picture">
				<p>"I used to dread reporting maintenance issues because it felt like nothing ever got done. But since the introduction of this complaint management system, things have changed. The interface is user-friendly, and I can track the progress of my complaints in real-time."</p>
				<h2>- Presnel Weluke
                Resident for 5 years
                </h2>
			</label>
			<label class="item" for="t-3">
				<img src="pexels7.jpg" alt="picture">
				<p>"As a new resident, I was worried about how issues would be handled. But this complaint management system has been fantastic! It’s so easy to use, and I love that I can submit complaints through an app. The team is very responsive, and I appreciate the transparency in the resolution process. It's a big relief!"</p>
				<h2>- Emily Kyalo.
                    New Resident.</h2>
			</label>
			<label class="item" for="t-4">
				<img src="pexels5.jpg" alt="picture">
				<p>"I've been living here for over a decade, and this complaint management system is one of the best improvements I’ve seen. It’s convenient to report issues online rather than having to call or visit the office. The follow-up communication is excellent, and the system has definitely increased accountability. Kudos to the management for implementing it!"</p>
				<h2>- Michael Oguta.
                Long-term Resident</h2>
			</label>
			<label class="item" for="t-5">
				<img src="Pexels2.jpg" alt="picture">
				<p>"The complaint management system is fantastic! It’s streamlined, easy to use, and I love the feature that allows residents to see the status of their complaints. The response from the maintenance team has been faster and more efficient since this system was introduced. It’s clear that the management is committed to improving our living environment."</p>
				<h2>- Anna Soipan.
                Resident since 2019.</h2>
			</label>
		</div>
		<div class="dots">
			<label for="t-1"></label>
			<label for="t-2"></label>
			<label for="t-3"></label>
			<label for="t-4"></label>
			<label for="t-5"></label>
		</div>
	</div>
    
        </section>

        <section id="Contact">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center;">
        <div style="background-color: #E2E2B6; border: 1px solid #6EACDA; flex: 1; padding: 10px; margin-left:10px;">
            <h2 style="text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 36px;">Contact Us</h2>

            <form action="contact.php" method="post" style="font-family: 'Georgia', serif; font-size: 18px;">
                <label for="name" style="display: block; margin-bottom: 10px;">Name:</label>
                <input type="text" id="name" name="name" style="width: 80%; background-color: white; padding: 10px; margin-bottom: 20px; color: black;">

                <label for="email" style="display: block; margin-bottom: 10px;">Email:</label>
                <input type="email" id="email" name="email" style="width: 80%; background-color: white; padding: 10px; margin-bottom: 20px; color: black;">

                <label for="message" style="display: block; margin-bottom: 10px;">Message:</label>
                <textarea id="message" name="message" style="width: 80%; height: 80px; padding: 10px; margin-bottom: 20px; color: black;"></textarea>

                <button type="submit" style="display: block; margin: 0 auto; background-color: #508C9B; border-radius: 30px; color: #fff; padding: 10px 30px; border: none; cursor: pointer; font-size: 18px;">Send</button>
            </form>
        </div>
        
        <div class="map" style="flex: 1; padding: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.801298645712!2d35.96237177364103!3d-0.16736423542394396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1829f6f367bba6d9%3A0x363c14244dccdde!2sKabarak%20University!5e0!3m2!1sen!2ske!4v1721766410986!5m2!1sen!2ske" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>



<footer style="background-color: #508C9B; color: #E2E2B6; text-align: center; padding: 20px; font-family: Montserrat, sans-serif; font-size: 16px;">
    <p>&copy; 2024 David Kyalo. All rights reserved.</p>
    <div style="margin-top: 6px;">
        <a href="https://www.facebook.com/yourprofile" target="_blank" style="color: white; margin: 0 6px;">
            <i class="fa fa-facebook-f"></i>
        </a>
        <a href="https://www.twitter.com/yourprofile" target="_blank" style="color: #E2E2B6; margin: 0 10px;">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="https://github.com/David-Kyalo" target="_blank" style="color: #E2E2B6; margin: 0 10px;">
            <i class="fa fa-github"></i>
        </a>
        <a href="https://www.instagram.com/yourprofile" target="_blank" style="color: #E2E2B6; margin: 0 10px;">
            <i class="fa fa-instagram"></i>
        </a>
    </div>
</footer>

        


    
      <script src="js/script.js"></script>
      <script src="js/scripts.js"></script>
</body>
</html>