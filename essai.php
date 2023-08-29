<!-- 



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://api-testbed.maxicashapp.com/payentryweb?logid=123456"></script>
    <title>Document</title>
</head>
<body>
<a id="mxc00"><script async src="https://api-testbed.maxicashapp.com/mxcashbtn.js"></script> </a>
    <form action="https://api-testbed.maxicashapp.com/payentry " method="POST">
        <input type="hidden" name="PayType" value="MaxiCash">
        <input type="hidden" name="Amount" value="{TOTAL_AMOUNT}">
        <input type="hidden" name="Currency" value="MaxiDollar">
        <input type="hidden" name="Telephone" value="{MAXICASH_TELEPHONE_NO}">
        <input type="hidden" name="Email" value="{MAXICASH_EMAIL}">
        <input type="hidden" name="MerchantID" value="{YOUR_MERCHANT_ID}">
        <input type="hidden" name="MerchantPassword" value="{YOUR_MERCHANT_PASSWORD}">
        <input type="hidden" name="Language" value="En">
        <input type="hidden" name="Reference" value="{REFERENCE_OF_TRANSACTION}">
        <input type="hidden" name="accepturl" value="{SUCCESS_URL}">
        <input type="hidden" name="cancelurl" value="{CANCEL_URL}">
        <input type="hidden" name="declineurl" value="{FAILURE_URL}">
        <input type="hidden" name="notifyurl" value="{NOTIFY_URL}">
    </form>
</body>
</html>
<script>
   
    {
    "PayType": "MaxiCash",
    "MerchantID": "{YOUR_MERCHANT_ID}",
    "MerchantPassword": "{YOUR_MERCHANT_PASSWORD}",
    "Amount": "1000", //please note that the amounts must be sent in Cents
    "Currency": "maxiDollar", //values can be “maxiDollar” or “maxiRand”
    "Telephone": "{MAXICASH_TELEPHONE_NO}",
    "Language": "en", //en or fr
    "Reference": "{REFERENCE_OF_TRANSACTION}",
    "SuccessURL": "{SUCCESS_URL}",
    "FailureURL": "{FAILURE_URL}",
    "CancelURL": "{CANCEL_URL}",
    "NotifyURL": "{NOTIFY_URL}"
}

{
  "SessionToken": null,
  "ResponseStatus": "success",
  "ResponseError": "",
  "ResponseData": "123456",
  "ResponseDesc": "LogID",
  "TransactionID": "sample string 6",
  "LogID": "123456",
  "Reference": null
}


let PmtID = "";
function CallPayLaterSynch() {
    let a = new Object();
    a.Amount = 1000; //please note that the amounts must be sent in Cents
    a.Currency = 'maxiDollar'; //values can be “maxiDollar” or “maxiRand”
    a.Telephone = '{MAXICASH_TELEPHONE_NO}';
    a.MerchantID = '{YOUR_MERCHANT_ID}';
    a.MerchantPassword = '{YOUR_MERCHANT_PASSWORD}';
    a.Language = 'en'; //en or fr
    a.Reference = '{REFERENCE_OF_TRANSACTION}';

    let payloadString = "";
    payloadString = JSON.stringify(a);
    payloadString = payloadString.replace(/\"/g, '\\"');
    let vURL = "https://api-testbed.maxicashapp.com/Merchant/api.asmx/PayLaterSynch";
    $.ajax({
        type: "POST",
        url: vURL,
        data: '{strData: "' + payloadString + '" }',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            let parsedResponse = typeof data.d == "string" ? eval("(" + data.d + ")") : data.d;
            if (parsedResponse[1] === "Success") {
                alert("An SMS has been sent to your MaxiCash number to finalize the payment");
                PmtID = parsedResponse[3];
            } else {
                alert("An error has occured: " + parsedResponse[2]);
            }
        },
        failure: function(e, textStatus, errorThrown) {
            alert("An error has occured: " + textStatus);
        }
    });
}


function CallValidatePayment(pin, PmtID) {
    let a = new Object();
    a.PaymentID = PmtID; //Received from PayLaterSynch
    a.PIN = pin; //Received from the User
    a.MerchantID = '{YOUR_MERCHANT_ID}';
    a.MerchantPassword = '{YOUR_MERCHANT_PASSWORD}';
    a.Language = 'en'; //en or fr

    let payloadString = "";
    payloadString = JSON.stringify(a);
    payloadString = payloadString.replace(/\"/g, '\\"');
    let vURL = "https://api-testbed.maxicashapp.com/Merchant/api.asmx/CompletePayLater";

    $.ajax({
        type: "POST",
        url: vURL,
        data: '{strData: "' + payloadString + '" }',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            let parsedResponse = typeof data.d == "string" ? eval("(" + data.d + ")") : data.d;
            if (parsedResponse[1] === "Success") {
                alert("Your payment has been finalized");
            } else {
                alert("An error has occured: " + parsedResponse[2]);
            }
        },
        failure: function(e, textStatus, errorThrown) {
            alert("An error has occured: " + textStatus);
        }
    });
}


function CallPayNowSynch() {
    let a = new Object();
    
    a.PayType = 'MaxiCash';                                
    a.Amount = 1000; //please note that the amounts must be sent in Cents
    a.Currency = 'maxiDollar'; //values can be “maxiDollar” or “maxiRand”
    a.Telephone = '{MAXICASH_TELEPHONE_NO}';
    a.MerchantID = '{YOUR_MERCHANT_ID}';
    a.MerchantPassword = '{YOUR_MERCHANT_PASSWORD}';
    a.Language = 'en'; //en or fr
    a.Reference = '{REFERENCE_OF_TRANSACTION}';

    let payloadString = "";
    payloadString = JSON.stringify(a);
    payloadString = payloadString.replace(/\"/g, '\\"');
    let vURL = "https://api-testbed.maxicashapp.com/Merchant/api.asmx/PayNowSynch";

    $.ajax({
        type: "POST",
        url: vURL,
        data: '{strData: "' + payloadString + '" }',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            let parsedResponse = typeof data.d == "string" ? eval("(" + data.d + ")") : data.d;
            if (parsedResponse[1] === "Success") {
                alert("Your payment was successful");
            } else {
                alert("An error has occured: " + parsedResponse[2]);
            }
        },
        failure: function(e, textStatus, errorThrown) {
            alert("An error has occured: " + textStatus);
        }
    });
}

let PmtID = "";
let PType = "";
function CallPayNowAsynch() {
    let a = new Object();
    a.PayType = 'MaxiCash';
    a.Amount = 1000; //please note that the amounts must be sent in Cents
    a.Currency = 'maxiDollar'; //values can be “maxiDollar” or “maxiRand”
    a.Telephone = '{MAXICASH_TELEPHONE_NO}';
    a.MerchantID = '{YOUR_MERCHANT_ID}';
    a.MerchantPassword = '{YOUR_MERCHANT_PASSWORD}';
    a.Language = 'en'; //en or fr
    a.Reference = '{REFERENCE_OF_TRANSACTION}';

    let payloadString = "";
    payloadString = JSON.stringify(a);
    payloadString = payloadString.replace(/\"/g, '\\"');
    let vURL = "https://api-testbed.maxicashapp.com/Merchant/api.asmx/PayNowAsynch";

    $.ajax({
        type: "POST",
        url: vURL,
        data: '{strData: "' + payloadString + '" }',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            let parsedResponse = typeof data.d == "string" ? eval("(" + data.d + ")") : data.d;
            if (parsedResponse[1] === "Success") {
                alert("Your payment was initialized. Please complete it on your Mobile device");
                PmtID = parsedResponse[3];
                PType = parsedResponse[6];
            } else {
                alert("An error has occured: " + parsedResponse[2]);
            }
        },
        failure: function(e, textStatus, errorThrown) {
            alert("An error has occured: " + textStatus);
        }
    });
}
function CallPayNowStatus(Pmt, PmtType) {
    let a = new Object();
    
    a.PmtID = Pmt;
    a.PType = PmtType;
    a.MerchantID = '{YOUR_MERCHANT_ID}';
    a.MerchantPassword = '{YOUR_MERCHANT_PASSWORD}';
    a.Language = 'en'; //en or fr

    let payloadString = "";
    payloadString = JSON.stringify(a);
    payloadString = payloadString.replace(/\"/g, '\\"');
    let vURL = "https://api-testbed.maxicashapp.com/Merchant/api.asmx/CompletePayLater";

    $.ajax({
        type: "POST",
        url: vURL,
        data: '{strData: "' + payloadString + '" }',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            let parsedResponse = typeof data.d == "string" ? eval("(" + data.d + ")") : data.d;
            if (parsedResponse[1] === "Success") {
                //redirecting the user to the correct URL
                window.location.href = parsedResponse[4];
                PmtID = parsedResponse[3];

            } else {
                alert("An error has occured: " + parsedResponse[2]);
            }
        },
        failure: function(e, textStatus, errorThrown) {
            alert("An error has occured: " + textStatus);
        }
    });
}
</script>
<script src=" https://api.maxicashapp.com/payentry?data={
        PayType:"MaxiCash",
        Amount:"{TOTAL_AMOUNT}",
        Currency:"maxiDollar",
        Telephone:"{MAXICASH_TELEPHONE_NO}",
        MerchantID:"{YOUR_MERCHANT_ID}",
        MerchantPassword:"{YOUR_MERCHANT_PASSWORD}",
        Language:"fr",
        Reference:"{REFERENCE_OF_TRANSACTION}",
        Accepturl:"{SUCCESS_URL}",
        Cancelurl:"{CANCEL_URL}",
        Declineurl:"{FAILURE_URL}",
        NotifyURL:"{NOTIFY_URL}"}">
    </script> -->