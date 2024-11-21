<!-- Share Modal -->
<div id="shareModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeShareModal()">&times;</span>
        <h2>Share this Profile</h2>
        <div class="social-links">
            @forelse ($shareLinks as $platform => $link)
                <a href="{{ $link }}" target="_blank" class="social-icon {{ $platform }}"
                    title="{{ ucfirst($platform) }}">
                    <i class="fa-brands fa-{{ $platform }}"></i>
                </a>
            @empty
                <p>No sharing links available.</p>
            @endforelse
        </div>
    </div>
</div>


<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border-radius: 8px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Close button styles */
    .close {
        color: #aaa;
        float: right;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* Social links container */
    .social-links {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-top: 20px;
    }

    /* Social icon styles */
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        font-size: 24px;
        color: #fff;
        text-decoration: none;
        border-radius: 50%;
        transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Background colors for specific social platforms */
    .social-icon.facebook {
        background-color: #3b5998;
        /* Facebook blue */
    }

    .social-icon.twitter {
        background-color: #1da1f2;
        /* Twitter blue */
    }

    .social-icon.linkedin {
        background-color: #0077b5;
        /* LinkedIn blue */
    }

    .social-icon.telegram {
        background-color: #0088cc;
        /* Telegram blue */
    }

    .social-icon.whatsapp {
        background-color: #25d366;
        /* WhatsApp green */
    }

    .social-icon.reddit {
        background-color: #ff4500;
        /* Reddit orange */
    }

    /* Hover effects */
    .social-icon:hover {
        background-color: #333;
        /* Darker background on hover */
        color: #fff;
        /* Ensure text color remains readable */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Stronger shadow on hover */
    }
</style>

<script>
    function showShareModal(event) {
        event.preventDefault();
        document.getElementById('shareModal').style.display = 'block';
    }

    function closeShareModal() {
        document.getElementById('shareModal').style.display = 'none';
    }
</script>
