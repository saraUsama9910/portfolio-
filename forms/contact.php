<form action="https://formsubmit.co/sarausama80@gmail.com" method="POST" class="php-email-form">

  <!-- تعطيل الكابتشا -->
  <input type="hidden" name="_captcha" value="false">

  <!-- صفحة التحويل بعد الإرسال (غيريها لو عايزة) -->
  <input type="hidden" name="_next" value="https://yourwebsite.com/thanks.html">

  <!-- عنوان الإيميل اللي تستلمي عليه (اختياري لو انتي عايزة تغيري) -->
  <input type="hidden" name="_subject" value="New Message From Portfolio Website">

  <!-- اسم المرسل -->
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
    </div>

    <!-- إيميل المرسل -->
    <div class="col-md-6 form-group">
      <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
    </div>
  </div>

  <!-- العنوان -->
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
  </div>

  <!-- الرسالة -->
  <div class="form-group mt-3">
    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
  </div>

  <!-- الزر -->
  <div class="text-center mt-3"><button type="submit">Send Message</button></div>

</form>
