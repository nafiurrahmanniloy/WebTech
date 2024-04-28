  document.addEventListener("alluser", function() {
    // Function to fetch users when the button is clicked
    document.getElementById('fetchUsersBtn').addEventListener('click', function() {
      // Create an XMLHttpRequest object
      var xhr = new XMLHttpRequest();
  
      // Configure the request
      xhr.open('GET', "../model/Ajaxdb", true);
  
      // Set the response type
      xhr.responseType = 'json';
  
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          // Check if the request was successful (status code 200)
          if (xhr.status === 200) {
            // Parsing the JSON response
            var users = JSON.parse(xhr.responseText);
            
            // Clear previous users list
            var usersList = document.getElementById('users-list');
            usersList.innerHTML = '';
  
            // Loop through the users and append them to the list
            users.forEach(function(user) {
              var listItem = document.createElement('li');
              listItem.textContent = user.name;
              usersList.appendChild(listItem);
            });
          } else {
            // If the request was not successful, handle the error
            console.error('Request failed with status:', xhr.status);
          }
        }
      };
  
      // Send the request
      xhr.send();
    });
});