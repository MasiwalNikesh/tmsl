<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    <button type="submit">Send</button>
</form>