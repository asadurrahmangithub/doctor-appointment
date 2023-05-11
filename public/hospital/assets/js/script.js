const form = document.getElementById('form');
const patient_name = document.getElementById('patient_name');
const patient_phone = document.getElementById('patient_phone');
const total_fee = document.getElementById('total_fee');
const paid_amount = document.getElementById('paid_amount');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const validateInputs = () => {
    const patientName = patient_name.value.trim();
    const patientPhone = patient_phone.value.trim();
    const totalFee = total_fee.value.trim();
    const paidAmount = paid_amount.value.trim();

    if(patientName === '') {
        setError(patient_name, 'Please Enter Your Patient Name');
    } else {
        setSuccess(patient_name);
    }

    if(patientPhone === '') {
        setError(patient_phone, 'Please Enter Your Patient Phone Number');
    } else {
        setSuccess(patient_phone);
    }

    if(totalFee === '') {
        setError(total_fee, 'Please Add Appointment Info');
    } else {
        setSuccess(total_fee);
    }

    if(paidAmount === '') {
        setError(paid_amount, 'Please Enter Total Fee');
    } else if (paidAmount !== totalFee) {
        setError(paid_amount, "Total Fee doesn't match");
    } else {
        setSuccess(paid_amount);
    }

};
