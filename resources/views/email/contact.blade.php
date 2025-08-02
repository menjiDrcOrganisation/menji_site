<x-mail::message>
# Nouvelle demande de contact
<p>Vous avez reçu un nouveau message de contact :</p>
<p><strong>Nom :</strong> {{ $data['name'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Sujet :</strong> {{ $data['subject'] }}</p>
<p><strong>Service concerné :</strong> {{ $data['service'] }}</p> 
<p><strong>Message :</strong></p>
<p>{{ $data['message'] }}</p>
<p>Veuillez répondre à ce message dès que possible.</p>
<p>Merci,</p>
<p>L'équipe Menji DRC</p>
</x-mail::message>
