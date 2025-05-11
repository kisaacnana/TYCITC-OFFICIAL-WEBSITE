const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);


function payWithPaystack(e) {

  e.preventDefault();


  let handler = PaystackPop.setup({

    key: 'pk_live_d7933ec336f543b0be9622e064adfcdd08edd1ef', 

    email: document.getElementById("email-address").value,

    amount: document.getElementById("amount").value*100,

    currency: 'GHS',

    ref: document.getElementById("reference").value + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference.
    //Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

    // label: "Optional string that replaces customer email"

    onClose: function(){
      window.location.replace("./unsuccessful");

    },

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;

      window.location.replace("./successful");

    }

  });


  handler.openIframe();

}
