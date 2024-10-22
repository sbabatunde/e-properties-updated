<div class="home-container mt-2">
    <div class="main-title">
        <span>The world is going <em style="color: red;font:600;font-size:large">e</em> so are we</span>
    </div>

    <div class="scrollable-buttons-container container">
        <div class="scrollable-buttons">
            <a href="http://essentialnews.ng/" class="scrollable-button">E-News</a>
            <a href="https://ejobs.com/" class="scrollable-button">E-Jobs</a>
            <a href="http://estores.ng/" class="scrollable-button">E-Stores</a>
            <a href="http://evenue.ng/" class="scrollable-button">E-Venue</a>
            <a href="https://eproperties.ng/" class="scrollable-button">E-Properties</a>
            <a href="https://ebnbhotel.com/" class="scrollable-button">EBNB-Hotels</a>
            <a href="" class="scrollable-button">E-Companion</a>
            <a href="https://edirect.ng/" class="scrollable-button">E-Direct</a>
        </div>
    </div>
</div>

<style>
    /* Container for scrolling */
    .scrollable-buttons-container {
        overflow-x: auto;
        white-space: nowrap;
        padding: 20px;
        margin-top: 20px;
    }

    /* The scrollable buttons */
    .scrollable-buttons {
        display: flex;
        gap: 10px;
        cursor: grab;
        /* Hand cursor to indicate draggable area */
    }

    /* Individual button styling */
    .scrollable-button {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 10px;
        background-color: #5d5db8;
        color: white;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
        white-space: nowrap;
        /* Prevent buttons from wrapping */
    }

    /* Hover effect for buttons */
    .scrollable-button:hover {
        background-color: #394293;
        transform: scale(1.05);
        /* Slight zoom-in effect on hover */
    }

    /* Scrollbar styling */
    .scrollable-buttons-container::-webkit-scrollbar {
        height: 6px;
    }

    .scrollable-buttons-container::-webkit-scrollbar-thumb {
        background-color: #5d5db8;
        border-radius: 10px;
    }

    .scrollable-buttons-container::-webkit-scrollbar-track {
        background: #ddd;
    }

    /* Responsive Styling */
    @media (max-width: 600px) {
        .scrollable-button {
            padding: 8px 16px;
            font-size: 14px;
        }
    }

    @media (min-width: 900px) {
        .scrollable-button {
            padding: 12px 24px;
            font-size: 16px;
            margin: auto;
        }
    }
</style>
