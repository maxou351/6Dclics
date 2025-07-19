<h2>Nouveau message de contact</h2>

<p><strong>Nom :</strong> {{ $formData['name'] }}</p>
<p><strong>Email :</strong> {{ $formData['email'] }}</p>
<p><strong>Type de demande :</strong> {{ $formData['demande'] ?? 'Non précisé' }}</p>
<p><strong>Message :</strong></p>
<p>{{ $formData['message'] ?? 'Non précisé' }}</p>