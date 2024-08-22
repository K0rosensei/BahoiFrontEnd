document.addEventListener("DOMContentLoaded", function () {
  const loginPopup = document.getElementById("loginPopup");
  const showLoginBtn = document.getElementById("showLoginBtn");
  const closeLoginBtn = loginPopup.querySelector(".close");
  const loginForm = document.getElementById("loginForm");
  const showRegisterLink = document.getElementById("showRegisterLink");

  function showLoginPopup() {
    loginPopup.style.display = "block";
  }

  function hideLoginPopup() {
    loginPopup.style.display = "none";
  }

  showLoginBtn.addEventListener("click", showLoginPopup);
  closeLoginBtn.addEventListener("click", hideLoginPopup);

  window.addEventListener("click", function (event) {
    if (event.target == loginPopup) {
      hideLoginPopup();
    }
  });

//   loginForm.addEventListener("submit", function (e) {
//     e.preventDefault();
//     const email = document.getElementById("loginEmail").value;
//     const password = document.getElementById("loginPassword").value;
//     const rememberMe = document.getElementById("remember").checked;

//     const formData = new FormData();
//     formData.append("email", email);
//     formData.append("password", password);

//     fetch("config/login.php", {
//       method: "POST",
//       body: formData,
//     })
//       .then((response) => response.json())
//       .then((data) => {
//         console.log("Response from server:", data); // Debugging
//         if (data.token) {
//           localStorage.setItem("token", data.token);
//           localStorage.setItem("username", data.username);
//           updateNavbar();
//           hideLoginPopup();
//         } else {
//           alert("Login failed: " + data.error);
//         }
//       })
//       .catch((error) => console.error("Error:", error));
//   });

//   const forgetPasswordLink = loginPopup.querySelector(".forget-password");
//   forgetPasswordLink.addEventListener("click", function (e) {
//     e.preventDefault();
//     alert("Forget password functionality to be implemented");
//   });

//   showRegisterLink.addEventListener("click", function (e) {
//     e.preventDefault();
//     hideLoginPopup();
//     document.getElementById("registrationPopup").style.display = "block";
//   });

//   function updateNavbar() {
//     const token = localStorage.getItem("token");
//     const username = localStorage.getItem("username");

//     console.log("Updating navbar with token:", token); // Debugging

//     if (token) {
//       fetch(`config/cek_token.php?token=${token}`)
//         .then((response) => response.json())
//         .then((data) => {
//           console.log("Token validation response:", data); // Debugging
//           if (data.isLoggedIn) {
//             document.getElementById("loginButton").style.display = "none";
//             document.getElementById("registerButton").style.display = "none";
//             document.getElementById("usernameDisplay").style.display = "flex";
//             document.querySelector("#usernameDisplay .user-name").innerText =
//               username;
//             document.getElementById("pemesananButton").style.display =
//               "inline-block";
//           }
//         })
//         .catch((error) => console.error("Error:", error));
//     }
//   }

//   document.addEventListener("DOMContentLoaded", updateNavbar);
});

document.addEventListener("DOMContentLoaded", function () {
  const registrationPopup = document.getElementById("registrationPopup");
  const showRegisterBtn = document.getElementById("showRegisterBtn");
  const closeRegisterBtn = registrationPopup.querySelector(".close");
  const registrationForm = document.getElementById("registrationForm");
  const showLoginLink = document.getElementById("showLoginLink");

  function showRegistrationPopup() {
    registrationPopup.style.display = "block";
  }

  function hideRegistrationPopup() {
    registrationPopup.style.display = "none";
  }

  showRegisterBtn.addEventListener("click", showRegistrationPopup);
  closeRegisterBtn.addEventListener("click", hideRegistrationPopup);

  window.addEventListener("click", function (event) {
    if (event.target == registrationPopup) {
      hideRegistrationPopup();
    }
  });

  registrationForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("registerName").value;
    const email = document.getElementById("registerEmail").value;
    const password = document.getElementById("registerPassword").value;
    const agreeTerms = document.getElementById("terms").checked;

    if (agreeTerms) {
      fetch("config/signup.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          registerName: name,
          registerEmail: email,
          registerPassword: password,
        }),
      })
        .then((response) => response.text())
        .then((data) => {
          alert(data);
          if (data.includes("Registration successful")) {
            hideRegistrationPopup();
          }
        })
        .catch((error) => console.error("Error:", error));
    } else {
      alert("You must agree to the Terms & Conditions");
    }
  });

  showLoginLink.addEventListener("click", function (e) {
    e.preventDefault();
    hideRegistrationPopup();
    document.getElementById("loginPopup").style.display = "block";
  });
});
