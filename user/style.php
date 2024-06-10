<?php 
echo '
:root {
  --background: white;
  --navbar-width: 256px;
  --navbar-width-min: 80px;
  --navbar-dark-primary: rgba(09,41,98,0.9);
  --navbar-dark-secondary: rgba(09,41,98,0.9);
  --navbar-light-primary: #f5f6fa;
  --navbar-light-secondary: #8392a5;
}

html, body {
  margin: 0;
  background: var(--background);
}


#nav-bar {
  position: absolute;
  left: 1vw;
  top: 1vw;
  height: calc(100% - 2vw);
  background: var(--navbar-dark-primary);
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  color: var(--navbar-light-primary);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  overflow: hidden;
  user-select: none;
}
#nav-bar hr {
  margin: 0;
  position: relative;
  left: 16px;
  width: calc(100% - 32px);
  border: none;
  border-top: solid 1px var(--navbar-dark-secondary);
}
#nav-bar a {
  color: inherit;
  text-decoration: inherit;
}
#nav-bar input[type=checkbox] {
  display: none;
}

#nav-header {
  position: relative;
  width: var(--navbar-width);
  left: 16px;
  width: calc(var(--navbar-width) - 16px);
  min-height: 80px;
  background: var(--navbar-dark-primary);
  border-radius: 16px;
  z-index: 2;
  display: flex;
  align-items: center;
  transition: width 0.2s;
}
#nav-header hr {
  position: absolute;
  bottom: 0;
}

#nav-title {
  font-size: 20px;
  transition: opacity 1s;
  font-weight: bold;
}



#nav-content {
  margin: -16px 0;
  padding: 16px 0;
  position: relative;
  flex: 1;
  width: var(--navbar-width);
  background: var(--navbar-dark-primary);
  box-shadow: 0 0 0 16px var(--navbar-dark-primary);
  direction: rtl;
  overflow-x: hidden;
  transition: width 0.2s;
}
#nav-content::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}
#nav-content::-webkit-scrollbar-thumb {
  border-radius: 99px;
  background-color: #D62929;
}
#nav-content::-webkit-scrollbar-button {
  height: 16px;
}

#nav-content-highlight {
  position: absolute;
  left: 16px;
  top: -70px;
  width: calc(100% - 16px);
  height: 54px;
  background: var(--background);
  background-attachment: fixed;
  border-radius: 16px 0 0 16px;
  transition: top 0.2s;
}
#nav-content-highlight:before, #nav-content-highlight:after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 100%;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  box-shadow: 16px 16px var(--background);
}
#nav-content-highlight:after {
  top: 100%;
  box-shadow: 16px -16px var(--background);
}

.nav-button {
  position: relative;
  margin-left: 16px;
  height: 54px;
  display: flex;
  align-items: center;
  color: var(--navbar-light-secondary);
  direction: ltr;
  cursor: pointer;
  z-index: 1;
  transition: color 0.2s;
}
.nav-button span {
  transition: opacity 1s;
}
.nav-button .fas {
  transition: min-width 0.2s;
}
.nav-button:nth-of-type(1):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(1):hover ~ #nav-content-highlight {
  top: 16px;
}
.nav-button:nth-of-type(2):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(2):hover ~ #nav-content-highlight {
  top: 70px;
}
.nav-button:nth-of-type(3):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(3):hover ~ #nav-content-highlight {
  top: 124px;
}
.nav-button:nth-of-type(4):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(4):hover ~ #nav-content-highlight {
  top: 178px;
}
.nav-button:nth-of-type(5):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(5):hover ~ #nav-content-highlight {
  top: 232px;
}
.nav-button:nth-of-type(6):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(6):hover ~ #nav-content-highlight {
  top: 286px;
}
.nav-button:nth-of-type(7):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(7):hover ~ #nav-content-highlight {
  top: 340px;
}
.nav-button:nth-of-type(8):hover {
  color: var(--navbar-dark-primary);
}
.nav-button:nth-of-type(8):hover ~ #nav-content-highlight {
  top: 394px;
}

#nav-bar .fas {
  min-width: 3rem;
  text-align: center;
}

#nav-footer {
  position: relative;
  width: var(--navbar-width);
  height: 54px;
  background: var(--navbar-dark-secondary);
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  z-index: 2;
  transition: width 0.2s, height 0.2s;
}

#nav-footer-heading {
  position: relative;
  width: 100%;
  height: 54px;
  display: flex;
  align-items: center;
}

#nav-footer-avatar {
  position: relative;
  margin: 11px 0 11px 16px;
  left: 0;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  overflow: hidden;
  transform: translate(0);
  transition: 0.2s;
}
#nav-footer-avatar img {
  height: 100%;
}

#nav-footer-titlebox {
  position: relative;
  margin-left: 16px;
  width: 10px;
  display: flex;
  flex-direction: column;
  transition: opacity 1s;
}

#nav-footer-subtitle {
  color: var(--navbar-light-secondary);
  font-size: 0.6rem;
}

#nav-footer-toggle:checked + #nav-footer {
  height: 30%;
  min-height: 54px;
}
#nav-footer-toggle:checked + #nav-footer label[for=nav-footer-toggle] {
  transform: rotate(180deg);
}

label[for=nav-footer-toggle] {
  position: absolute;
  right: 0;
  width: 3rem;
  height: 100%;
  display: flex;
  align-items: center;
  cursor: pointer;
  transition: transform 0.2s, opacity 0.2s;
}

#nav-footer-content {
  margin: 0 16px 16px 16px;
  border-top: solid 1px var(--navbar-light-secondary);
  padding: 16px 0;
  color: var(--navbar-light-secondary);
  font-size: 0.8rem;
  overflow: auto;
}
#nav-footer-content::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}
#nav-footer-content::-webkit-scrollbar-thumb {
  border-radius: 99px;
  background-color: #D62929;
}
body {
  margin: 0;
  background: #f2f2f2;
}

td {
  text-align: center;
}
#td1
{
  background-color: rgba(09,41,98,0.9);
  color: white;
  border: 10px;
  margin-top: -10px;
  padding: 10px;
  text-align: center;
}



    body {
    font-family: Tahoma;
    margin: 0;
    padding: 0;
  }
    .table-container {
      max-height: 370px; /* Ubah nilai tinggi sesuai kebutuhan */
      overflow-y: auto;
      overflow-x: hidden;
      border: 1px solid #ccc;
    
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius:10px;
    }

    table {
      
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 10px 30px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      width: 300px;
      text-align: center;
    }

    thead {
      color: white;
      background-color: rgba(09,41,98,0.9);
      font-weight: bold;
      position: sticky;
      top: 0;
      padding: 10px 30px;
    }

    
    tbody tr:hover {
      background-color: #f1f1f1;
    }
    span{
      font-family: Tahoma;
      margin-left: 20px;
      font-size: 15px;
    }
    button{
      padding: 4px;
      border-radius: 5px;
      background-color: rgb(87, 87, 245);
      color: white;
      font-weight: bold;
      font-size: small;
      cursor: pointer;
      
    }
    table button{
      background-color: red;

    }
    td{
      text-align: center;
    }
    .cont{
      margin-top: 20px;margin-left: 290px; box-shadow: 0 4px 10px black; border-radius:20px;height: 593px;width: 77%;
      overflow-y: auto;
      overflow-x: hidden;
      border: 1px solid #ccc;
    }
    form{
      padding: 20px 60px;
      display: flex;
     flex-direction: column;
     gap: 20px;
    }
    label{
      font-size: 18px;
    }
    input{
      padding: 6px 15px;
      width: 500px;
    }
    
    select{
      padding: 6px 15px;
      width: 533px;
    }
  
    button{
      width: 170px;
      padding: 4px 30px;
      font-size: 17px;
      font-weight: bold;
      background-color: rgba(09,41,98,0.9);
    }
    form div{
      display: flex;
      justify-content: space-between;
    
    }
';
?>