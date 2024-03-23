<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="task8-1.css">
  <title>Document</title>
</head>
<body>
  <section class="con_02">
    <div class="wrapper">
      <div class="contact">
        <form id="contactForm">
          <table>
            <tr>
              <th>お名前<span>必須</span></th>
              <td>
                <div class="input-container">
                  <input class="contact-6" type="text" placeholder="山田太郎" name="name" required>
                  <div class="error-message" id="nameError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>フリガナ<span>必須</span></th>
              <td>
                <div class="input-container">
                  <input class="contact-6" type="text" placeholder="ヤマダタロウ" name="furigana" required>
                  <div class="error-message" id="furiganaError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>メールアドレス<span>必須</span></th>
              <td>
                <div class="input-container">
                  <input class="contact-6" type="email" placeholder="info@fast-creademy.jp" name="user_email" required>
                  <div class="error-message" id="emailError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>電話番号<span>必須</span></th>
              <td>
                <div class="input-container">
                  <input class="contact-6" type="tel" placeholder="0123456789" name="user_tel" required>
                  <div class="error-message" id="telError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>お問い合わせ項目<span>必須</span></th>
              <td>
                <div class="input-container">
                  <select class="contact-3" tabindex="0" required>
                    <option value ="" tabindex="0" selected disabled>選択してください</option>
                    <option value="選択" tabindex="1">選択</option>
                    <option value="選択" tabindex="2">選択</option>
                    <option value="選択" tabindex="1">選択</option>
                  </select>
                  <div class="error-message" id="inquiryError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>お問い合わせ内容<span>必須</span></th>
              <td>
                <div class="input-container">
                  <textarea class="contact-7" placeholder="こちらにお問い合わせ内容をご記入ください" cols="50" rows="50" tabindex="0" accesskey="U" required></textarea>
                  <div class="error-message" id="contentError"></div>
                </div>
              </td>
            </tr>
            <tr>
              <th>個人情報保護方針<span>必須</span></th>
              <td>
                <div class="input-container">
                  <input type="checkbox" required><a class="agree" href="null">個人情報保護方針<i class="fas fa-window-restore"></i></a>
                  <div class="error-message" id="policyError"></div>
                </div>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="more_btn_01 btn_center">
        <button id="submitBtn">確認</button>
      </div>
    </div>
  </section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $furigana = $_POST['furigana'];
    $email = $_POST['user_email'];
    $tel = $_POST['user_tel'];
    $inquiry = $_POST['inquiry'];
    $content = $_POST['content'];

  
    $servername = "localhost";
    $username = "root";
    $password = "root"; 
    $dbname = "company"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("データベースに接続できませんでした: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO kiroku (name, furigana, email, tel, inquiry, content, submission_time)
            VALUES ('$name', '$furigana', '$email', '$tel', '$inquiry', '$content', NOW())";

    if ($conn->query($sql) === TRUE) {
       
        echo "データが正常に保存されました";
    } else {
        echo "データの挿入中にエラーが発生しました: " . $conn->error;
    }

   
    $conn->close();
}
?>
  
  <script>
  document.getElementById('submitBtn').addEventListener('click', function(event) {
    event.preventDefault(); 
    validateAndSubmit();
  });

  function validateAndSubmit() {
    var name = document.querySelector('input[name="name"]').value;
    var furigana = document.querySelector('input[name="furigana"]').value;
    var email = document.querySelector('input[name="user_email"]').value;
    var tel = document.querySelector('input[name="user_tel"]').value;
    var inquiry = document.querySelector('.contact-3').value;
    var content = document.querySelector('.contact-7').value;

    var nameError = document.getElementById('nameError');
    var furiganaError = document.getElementById('furiganaError');
    var emailError = document.getElementById('emailError');
    var telError = document.getElementById('telError');
    var inquiryError = document.getElementById('inquiryError');
    var contentError = document.getElementById('contentError');
    var policyError = document.getElementById('policyError');

    var errorMessage = '';

    if (!name) {
      errorMessage += 'お名前は必須です。<br>';
      nameError.innerHTML = 'お名前は必須です。';
    } else {
      nameError.innerHTML = '';
    }

    if (!furigana) {
        errorMessage += 'フリガナは必須です。<br>';
        furiganaError.innerHTML = 'フリガナは必須です。';
      } else {
        furiganaError.innerHTML = '';
      }

      if (!email) {
        errorMessage += 'メールアドレスは必須です。<br>';
        emailError.innerHTML = 'メールアドレスは必須です。';
      } else if (!email.includes('@')) {
        errorMessage += '正しいメールアドレスを入力してください。<br>';
        emailError.innerHTML = '正しいメールアドレスを入力してください。';
      } else {
        emailError.innerHTML = '';
      }

      if (!tel) {
        errorMessage += '電話番号は必須です。<br>';
        telError.innerHTML = '電話番号は必須です。';
      } else if (!tel.match(/^\d{10,11}$/)) {
        errorMessage += '正しい電話番号を入力してください。<br>';
        telError.innerHTML = '正しい電話番号を入力してください。';
      } else {
        telError.innerHTML = '';
      }

      if (inquiry === '') {
        errorMessage += 'お問い合わせ項目は必須です。<br>';
        inquiryError.innerHTML = 'お問い合わせ項目は必須です。';
      } else {
        inquiryError.innerHTML = '';
      }

      if (!content) {
        errorMessage += 'お問い合わせ内容は必須です。<br>';
        contentError.innerHTML = 'お問い合わせ内容は必須です。';
      } else {
        contentError.innerHTML = '';
      }

      if (!document.querySelector('input[type="checkbox"]').checked) {
        errorMessage += '個人情報保護方針に同意してください。<br>';
        policyError.innerHTML = '個人情報保護方針に同意してください。';
      } else {
        policyError.innerHTML = '';
      }
    if (errorMessage === '') {
      var submitButton = document.getElementById('submitBtn');
      submitButton.innerHTML = '送信';
      submitButton.removeEventListener('click', validateAndSubmit);
      submitButton.addEventListener('click', function() {
        // フォームの送信
        document.getElementById('contactForm').action = 'task9-1.php'; // フォームの送信先を設定
        document.getElementById('contactForm').submit(); // フォームの送信
      });
    }
  }
</script>
</body>
</html>