<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      input {
        border: 2px solid #c6c5fc;
        padding: 10px;
        border-radius: 7px;
      }
      select {
        border: 2px solid #c6c5fc;
        padding: 10px;
        border-radius: 7px;
      }
      button {
        border: 2px solid #817ff1;
      }
      select:focus {
        border: 2px solid blue;
      }
      label {
        margin-left: 5px;
        font-weight: bold;
        font-size: large;
      }
      a{
        text-decoration: none;
        color: black;
      }
      a:hover{
        color: rgba(09,41,98,0.9);
      }
    </style>
  </head>
  <body
    style="
      padding: 10px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
        'Lucida Sans', Arial, sans-serif;
    "
  >
    <div
      style="
        width: 100%;
        border-radius: 20px;
        display: flex;
        flex-direction: row;
        position: relative;
        overflow: hidden;
        box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.3);
      "
    >
      <div
        style="width: 32%; background-color: rgba(09,41,98,0.9); height: 560px"
      ></div>
      <div style="width: 68%"></div>
      <div
        style="
          position: absolute;
          width: 90%;
          z-index: 20;
          display: flex;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 10px;

          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
        "
      >
        <div style="width: 30%; height: 450px">
          <div
            style="
              width: 100%;
              height: 100%;
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: column;
            "
          >
            <div
              style="
                width: 200px;
                object-fit: cover;
                overflow: hidden;
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
              "
            >
             <i class='far fa-building' style='font-size:150px;color:white'></i>
            </div>
            <div
              style="
                display: flex;
                flex-direction: column;
                font-size: 20px;
                font-family: 'Trebuchet MS', sans-serif;
                font-weight: 700;
                color: white;
                align-items: center;
              "
            >
              <div>
                <div style="font-size: x-large;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL
                </div>
              </div>
              <div style="width: 60%"><hr /></div>
              <div style="font-weight: 100; font-size: 12px">
                Experience a good stay, enjoy fantastic offers
              </div>
            </div>
          </div>
        </div>
        <div
          style="
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
          "
        >
          <div style="position: absolute; top: 10px; right: 20px">
            <a href="index.php" style="text-decoration: none; color: black"
              >Home</a
            >
          </div>
          <div
            style="
              width: 60%;
              display: flex;
              flex-direction: column;
              justify-content: center;
              row-gap: 20px;
            "
          >
            <div
              style="
                font-size: 35px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 10px;
              "
            >
              User Login
            </div>
            <form
              method="POST"
              action="user_logged_in.php"
              style="
                display: flex;
                flex-direction: column;
                justify-content: center;
                row-gap: 20px;
              "
            >
              <div style="display: flex; flex-direction: column; gap: 5px">
                <label for="">Email</label>
                <input
                  type="email"
                  placeholder="Enter your Email"
                  name="email"
                />
              </div>
              <div style="display: flex; flex-direction: column; gap: 5px">
                <label for="">Password</label>
                <input
                  type="password"
                  placeholder="•••••••••"
                  name="password"
                />
              </div>
              <div style="display: flex;justify-content: space-between; padding:0px 10px;font-weight: bold;">
                <div>
                  <input type="checkbox"> Show Password
                </div>
                <a href="user_forgot_pwd.php">Forgot Password?</a>
              </div>
              
              <button
                type="submit"
                class="btn"
                style="
                  padding: 8px;
                  border-radius: 5px;
                  background-color: rgba(09,41,98,0.9);
                  color: white;
                  font-weight: bold;
                  font-size: medium;
                  cursor: pointer;
                "
              >
                Masuk
              </button>
              <div style="text-align: center; font-weight: bold;">
                Don't Have An Account? <span><a href="user_signup.php">Sign up</a></span>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
