// Get form elements
const form = document.querySelector('form');
const address = document.getElementById('address');
const age = document.getElementById('age');
const zip = document.getElementById('zip');
const genderParent = document.querySelector('input[name="gender"]').parentNode.parentNode;

// Get error elements
const addressError = document.getElementById('address-error');
const ageError = document.getElementById('age-error');
const zipError = document.getElementById('zip-error');
const genderError = document.getElementById('gender-error');

// Add event listener for form submission
form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Validate form
  if (validateForm()) {
    console.log('Submitting form data...'); 
  }
});

// Validate form
function validateForm() {
  let valid = true;

  // Validate address
  if (address.value.trim() === '') {
    setError(address, 'Address can not be empty.');
    valid = false;
  } else {
    setSuccess(address);
  }

  // Validate age
  const ageValue = parseInt(age.value);
  if (isNaN(ageValue) || ageValue < 18 || ageValue > 100) {
    setError(age, 'Age must be a number between 18 and 100');
    valid = false;
  } else {
    setSuccess(age);
  }

  // Validate zip
  const zipValue = parseInt(zip.value);
  if (isNaN(zipValue) || zipValue.toString().length !== 5) {
    setError(zip, 'Zip code must be a 5 digit number');
    valid = false;
  } else {
    setSuccess(zip);
  }

  // Validate gender only if no error has occurred before
  if (valid) {
    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
      setError(genderParent, 'Gender is required');
      valid = false;
    } else {
      setSuccess(genderParent);
    }
  }

  return valid;
}

// Function to display an error message for a form field
function setError(element, message) {
  console.log('Adding error message:', message);
  const errorContainer = getErrorContainer(element);
  if (errorContainer) {
      errorContainer.textContent = message;
  } else {
      const error = createErrorElement(message);
      element.insertAdjacentElement('afterend', error);
  }
}

// Function to remove the error message for a form field
function setSuccess(element) {
  const errorContainer = getErrorContainer(element);
  if (errorContainer) {
      errorContainer.remove();
  }
}

// Helper function to get the error container for a form field
function getErrorContainer(element) {
  const parent = element.closest('.form-group');
  if (parent) {
      return parent.querySelector('.error');
  }
  return null;
}
function createErrorElement(message) {
  const error = document.createElement('div');
  error.classList.add('error');
  error.textContent = message;
  return error;
}

