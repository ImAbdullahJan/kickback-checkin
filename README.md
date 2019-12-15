# kickback-auto-checkin

This repo is part of Gitcoin's Global Communities hackathon and represents a suggestion for kickback.events to allow auto-checkin at the events venue.

# Problem
1. Labor intensive making Kickback unsuitable for large event where check-in is not strict.
2. Prone to check-in error by organisers.

# Solution
Add WalletConnect support on the website for RSVP and also for the check-in.

Flow:
1. Add a check-in button under the organizer sign-in on the website.
2. The button will show a WalletConnect QR code to the user one pressed.
3. User will scan the QR code to connect with the website (Trust or any other mobile supported wallet).
4. The website will then automatically trigger a personal_sign request from the user.
5. Once user authenticates the request using his/her wallet, the web-app will authenticate the request and will update the attendance at the server-side database.
6. A sync script can then be used to update smart contracts.

As the solution is working from the organizer's own homepage on the Kickback event, wallet that is being used to checkin can be verified from the RSVP database on the spot and smart contract can be triggered directly.

The only downside of the approach is for the people who just MetaMask desktop chrome extension to RSVP. They will either need to restore their wallet on-mobile using mnemonic or organizer will have to check them in manually.

# Technical

I have modified [walletconnect-website-example-dapp](https://github.com/WalletConnect/walletconnect-example-dapp) for the demo.

The only major bits I added are on line [587](https://github.com/hammadtq/kickback-checkin/blob/6aeabf5273c24c0adae4228e2a9bf746b7cfc86f/app/src/App.tsx#L587) where I trigger `this.getDataAxios(signer);` function with the signer address. The example-dapp has a bug due to which signer is not matching the wallet address (I have reported the bug), however, this line can easily be encapsulated in `if(verified)` block.

The function [`getDataAxios()`](https://github.com/hammadtq/kickback-checkin/blob/4aab80a18f06de11b88bb7657ee75e03d8127217/app/src/App.tsx#L545) is simply hitting the web-side API to insert the data in the server-side MySQL database.

I have included the PHP and MySQL code for the server side as well.

These two functions can easily be modified to add further checks such as checking existing RSVP database to verify first if the attendee is walk-in or has actually RSVP'ed before!


# Demo Video
https://www.youtube.com/watch?v=mbaXlCab3tY&feature=youtu.be
[<img src="https://img.youtube.com/vi/mbaXlCab3tY/maxresdefault.jpg" width="50%">](https://youtu.be/mbaXlCab3tY)
