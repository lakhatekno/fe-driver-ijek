<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mitra Driver</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;500;700&family=Protest+Revolution&family=Raleway:ital,wght@0,100..900;1,100..900&family=Satisfy&family=Sixtyfour&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;500;700&family=Protest+Revolution&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Satisfy&family=Sixtyfour&display=swap');
    
    :root {
      --green: #4CAF50;
      --black: #333333;
      --white: #eeeeee;
    }

    * {
      font-family: 'Raleway', sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .row {
      display: flex;
      flex-direction: row;
    }

    .col {
      display: flex;
      flex-direction: column;
    }

    .user {
      width: fit-content;
      padding-right: 32px;
    }
    .user p {
      width: fit-content;
    }
    #nama_driver {
      font-weight: bold;
    }

    .nav {
      height: fit-content;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 16px;
      background-color: var(--green);
      color: var(--white);
    }

    .container {
      padding: 16px;
    }
    section {
      margin: 16px 0;
    }

    .status {
      align-items: center;
    }
    .status h2 {
      margin-right: 16px;
    }

    #revenue {
      font-family: 'Roboto Mono', monospace;
      font-size: 32px;
      color: var(--black);
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 36px;
      height: 24px;
    }
  
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      left: 2px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: var(--green);
    }

    input:focus + .slider {
      box-shadow: 0 0 1px var(--green);
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(16px);
      -ms-transform: translateX(16px);
      transform: translateX(16px);
    }

    .slider.round {
      border-radius: 24px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
    #order_section {
      background-color: #eee;
      border-radius: 16px;
      border: 1px solid #aaa;
      color: var(--black);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 250px;
    }
    #order_section img {
      width: 75px;
      height: 75px;
      margin-bottom: 16px;
    }

  </style>
</head>
<body>
  <nav class="row nav">
    <h1>Driver</h1>
    <div class="col user">
      <p id="nama_driver">Rahmat Wibowo</p>
      <p id="id_driver">ID: M24KY42255</p>
    </div>
  </nav>
  <div class="container">
    <section>
      <div class="row status">
        <h2>Status</h2>
        <label class="switch">
          <input id="cb" type="checkbox">
          <span class="slider round"></span>
        </label>
      </div>
      <p id="status"></p>
    </section>
    <section class="col">
      <h2>Pendapatanmu</h2>
      <p id="revenue">75.000</p>
    </section>
    <section id="order_section">
      <img src="https://cdn-icons-png.freepik.com/512/7649/7649839.png?uid=R47387532&ga=GA1.1.307450517.1714226851" alt="">
      <p id="order_status">Menunggu Orderan Masuk</p>
    </section>
  </div>
    
  <script>
    const cb = document.querySelector('#cb');
    const status = document.querySelector('#status');
    const order_status = document.querySelector('#order_status');
    if (cb.checked) {
      status.innerText = 'Online'
      order_status.innerText = 'Menunggu Orderan Masuk...'
    } else {
      status.innerText = 'Offline'
      order_status.innerText = 'Kamu Offline :('
    }
    cb.addEventListener('change', (event) => {
      if (cb.checked) {
        status.innerText = 'Online'
        order_status.innerText = 'Menunggu Orderan Masuk...'
      } else {
        status.innerText = 'Offline'
        order_status.innerText = 'Kamu Offline :('
      }
    })
  </script>
</body>
</html>