<?php

function MemberAccountCreated($FirstName, $LastName, $Password) {
    return "
        Dear ${FirstName} ${LastName},
        
        We are happy to inform your UCSC Alumni account has been created successfully. You can use
        this link to log-in to your account. Your default password is mentioned below.
        
        ${Password}
        
        You can change it as your preference once you logged into your account.
        
        Feel free to contact us!
        
        Best Regards,
        UCSC Alumni Diaries
        The Alumni Association of University of Colombo School of Computing
    ";
}