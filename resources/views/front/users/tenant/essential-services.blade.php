<div class="container tenant-service">
    <div class="tenant-services service1">
        <div class="tenant-sub-service second">
            <p>
                <span class="tenant-service-text1">
                    2
                </span><br><br>
                <span class="tenant-service-text2">
                    <span style="color: #394293;font-size:25px;"
                        class="d-flex justify-content-center">Maintenance</span><br>
                    <span style="font-size:15px; ">
                        <b> E-Properties connects you with reliable, skilled, and certified professionals...
                        </b>
                    </span>
                    <a href="{{ route('tenant.maintenance') }}" class="btn btn-tenant-service">Click Here</a>
                </span>
            </p>

            <img src="{{ asset('../assets/images/hero-images/service-1.png') }}" alt="">
        </div>
        <div class="tenant-sub-service fourth">
            <p>
                <span class="tenant-service-text1">
                    4
                </span><br><br>
                <span class="tenant-service-text2">
                    <span style="color: #394293;font-size:25px;" class="d-flex justify-content-center">Repair</span><br>
                    <span style="font-size:15px; ">
                        <b>
                            Professional solutions for every property repair need.
                        </b>
                    </span>
                    <a href="{{ route('tenant.repairs') }}" class="btn btn-tenant-service">Click Here</a>
                </span>
            </p>
            <img src="{{ asset('../assets/images/hero-images/service-2.png') }}" alt="">
        </div>
    </div>

    {{-- Vrtical line Begins --}}
    <div class="tenant-vert">
        <div class="tenant-vert-cricle"></div>
        <div class="tenant-vert-cricle"></div>
        <div class="tenant-vert-cricle"></div>
        <div class="tenant-vert-cricle"></div>
    </div>
    {{-- Vertical line Ends --}}

    <div class="tenant-services">
        <div class="tenant-sub-service first">
            <p>
                <span class="tenant-service-text1">
                    1
                </span><br><br>
                <span class="tenant-service-text2">
                    <span style="color: #394293;font-size:25px;" class="d-flex justify-content-center">Property
                        Valuation</span><br>
                    <span style="font-size:15px; ">
                        <b>Know the worth of your rental property with expert insights.
                        </b>
                    </span>
                    <a href="{{ route('tenant.property-valuation') }}" class="btn btn-tenant-service">Click Here</a>
                </span>
            </p>

            <img src="{{ asset('../assets/images/hero-images/service-1.png') }}" alt="">
        </div>
        <div class="tenant-sub-service third">
            <p>
                <span class="tenant-service-text1">
                    3
                </span><br><br>
                <span class="tenant-service-text2">
                    <span style="color: #394293;font-size:25px;"
                        class="d-flex justify-content-center">Security</span><br>
                    <span style="font-size:15px; ">
                        <b>
                            Comprehensive solutions to ensure the safety of your property.
                        </b>
                    </span>
                    <a href="{{ route('tenant.security') }}" class="btn btn-tenant-service">Click Here</a>
                </span>
            </p>
            <img src="{{ asset('../assets/images/hero-images/service-1.png') }}" alt="">
        </div>
    </div>
</div>
