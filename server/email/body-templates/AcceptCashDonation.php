<?php

function AcceptCashDonation($Name, $Amount, $DonatedFor, $Timestamp) {
    return "
        Dear ${Name},
        
        This is to inform you that, the cash amount donated by you has been accepted by the top board of UCSC Alumni Association.
        
              Donated Amount    :  Rs. ${Amount}
	      Donated For           :  ${DonatedFor}
	      Donated Timestamp:  ${Timestamp}
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries,
        The Alumni Association of University of Colombo School of Computing
    ";
}
