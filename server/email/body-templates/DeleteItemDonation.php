<?php

function DeleteItemDonation($Name, $Item, $Quantity, $DonatedFor, $Timestamp) {
    return "
        Dear ${Name},
        
        This is to inform you that, the Items donated by you have been accepted by the top board of UCSC Alumni Association.
        
          Donated Item     :  ${Item}
          Donated Quantity :  ${Quantity}
	  Donated For           :  ${DonatedFor}
	  Donated Timestamp:  ${Timestamp}
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}
