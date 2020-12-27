@extends('partials.master')

@section('content')
<style>
#header.header-transparent {
    background: rgba(26, 128, 43, 0.9);
}
</style>
<!-- ======= About Section ======= -->
<section id="about" class="about m-5 ">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0">
                <h3>About ILCR</h3>
                <p style="text-align: justify">
                    Land disputes, land degradations, loss of tenure, climate change actions as a result of low
                    capacity, poor implementation of polices and low risk awareness and emergency preparedness are major
                    re-occurring issues in Nigeria and other developing nations. In view of capacity related challenges
                    including skills and expertise, the Africa Union Member States through the African Union Declaration
                    on Land Issues and Challenges in Africa adopted in 2009 were urged to “build adequate human,
                    financial, technical capacities to support land policy development and implementation through
                    coordinating activities towards strengthening capacities of member universities and research
                    institutions for improved land governance on the continent amongst others.
                </p>
            </div>
            <p style="text-align: justify margin-left: 50px">

                <br>
                On the other hand, disaster occurrence is on the increase in Nigeria and most of disasters affects
                communities far away from where government agencies responsible for disaster management are located, the
                ability of community members to respond before any conventional agencies, like NEMA, SEMA, LEMA, Fire
                service, Road safety, etc, arrives can save lives and properties, therefore, to reduce the impact of
                disasters, communities need to be aware, prepare for emergencies and continuously work together. The
                implementation of the UN Environment’s Awareness and Preparedness for Emergency at Local Level (APELL)
                Approach seeks to build human capacity in Nigerian communities to reduce disaster impact through
                identification and creation of awareness of hazards and risks, initiating measures for risk reduction,
                accident prevention and mitigation and developing coordinated preparedness among the local industry,
                authorities and community by adopting a systematic approach ( Bottom - Up approach) and working towards
                sustainability through a national network of experts.
                In view of the foregoing, the Institute for Land and Community Resilience was established to build human
                and community capacity through formal and informal education and awareness creation among local
                communities in Nigeria on land and emergencies related matters.

            </p>
            <div class="row">
                <h4 style="color:red;">Our Objectives</h4>
            </div>

            <div class="row">

                <div class="col-md-5">
                    <img src="{{ asset('img/objective.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <ul style="text-align: justify">
                        <li>Improve land-related curricula in post-graduate training courses in quantity and quality.
                        </li>
                        <li>Promote knowledge management to support land policy and governance in Nigeria and to enhance
                            the community practice for land policy experts. </li>
                        <li>Design appropriate monitoring and evaluation systems; and implement pilots to facilitate
                            tracking of land related initiatives. </li>

                        <li>Provide and facilitate academic education and training for Nigerian land professionals and
                            practitioners. </li>

                        <li> Define an agenda for research and conduct applied research on land related issues. </li>

                        <li>Collaborate with Federal and State Ministries and allied departments to conduct land related
                            trainings and organise workshops and conferences. </li>

                    </ul>
                </div>
            </div>

            <h4 style="text-align: centre justify-content: center">Our Mandate</h4>
            <div class="row">

                <div class="col-md-5">
                    <img src="{{ asset('img/mandate.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <p style="text-align: justify; font-size: 17px;">ILCR mandates is to advance knowledge through a
                        systematic education, training of manpower and conduct cut edging researches for developing
                        leadership and competencies that will enhance innovation and sustainable development practices
                        at post graduate level that will directly address identified problems for a sustainable Land
                        Management and a Resilient Community. </p>
                </div>
            </div>


        </div>
</section><!-- End About Section -->

@endsection