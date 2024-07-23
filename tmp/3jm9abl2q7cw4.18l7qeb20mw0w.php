<?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
    <div class="content col-5">
        <h2>CONTACT US</h2>
        <hr class="custom-hr">
        <h2>ASK US ANYTHING</h2>
        <div>
            <label for="email">email</label>
            <input id="email" type="email" class="form-input" placeholder="type your email - we will answer">
        </div>
        <label for="message">message</label>
        <div class="form-group">
            <textarea id="message" class="form-textarea" placeholder="ask us anything..."></textarea>
        </div>
        <button type="submit" class="signup-btn">SEND</button>
        <hr class="custom-hr">
        <h2>OUR INFO</h2>
        <ul class="features-list">
            <li>Email: support@todolistapp.com</li>
            <li>Phone: 111 111 1111</li>
            <li>Address: 111 To-Do Lane, Productive City, H3W 1L4</li>
        </ul>
        <hr class="custom-hr">
        <h2>OUR TEAM</h2>
        <p>Bringing to you our best service</p>
    </div>

<?php echo $this->render('includes/footer.html',NULL,get_defined_vars(),0); ?>