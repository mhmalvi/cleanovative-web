<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function details($number)
    {
        $data = $this->get_data();

        $item = [];

        switch ($number) {
            case '1':
                $item = $data['one'];
                break;
            case '2':
                $item = $data['two'];
                break;
            case '3':
                $item = $data['three'];
                break;
            case '4':
                $item = $data['four'];
                break;
            case '5':
                $item = $data['five'];
                break;
            case '6':
                $item = $data['six'];
                break;
            case '7':
                $item = $data['seven'];
                break;
            default:
                break;
        }

        return view('pages.service_details', compact('item'));
    }

    private function get_data()
    {
        $one_data = [
            'title' => 'House-Residential Cleaning',
            'content' => "Grab a coffee with your loved ones while we handle the housecleaning so you may walk into your home that has been inexplicably cleaned to your satisfaction. Sit back and embrace the peace of mind that comes with knowing that your entire home has been professionally cleaned by a reputable company. Our team will ensure that your property is perfect and spotless. A professional cleaning staff that cleans exactly as you want it every time. <br> <br> In less than a minute, you can get a quote and book us.",
        ];
        $two_data = [
            'title' => "End of Lease Cleaning",
            'content' => "Moving in-or-out of houses? Looking to secure a strong return on your bond? Don’t stress, You’ve come to the right spot. Allow us to handle the housecleaning so you can enter into a home that has been professionally cleaned to your complete satisfaction and cross a major task off your list while you move. Our team will ensure that your end of lease cleaning meets the highest standard. Let us worry about cleaning the house like new and you can focus on your move. <br> <br> In less than a minute, you can get a quote and book us",
        ];
        $three_data = [
            'title' => 'Office-Commercial Cleaning ',
            'content' => "A lot of time is spent at work, and significant meetings are most likely held there. It is critical to maintain the cleanliness of the office in order to instil pride in the workplace, impress clients, and preserve hygiene. We believe that everyone, including you, your employees, and your customers, deserves to come to work in a clean atmosphere. We take pride in providing high-quality cleaning services at a fair price that are personalised to your individual or company needs. <br> <br> You can rely on our skilled cleaners at Cleanovative to handle a variety of office cleaning services. Click here to see the area our services cover. In less than a minute, you can get a quote and book us.",
        ];
        $four_data = [
            'title' => 'Party-Event Cleaning',
            'content' => "Planning on having a party or an event? Worried about the mess after? You’ve come to the right spot, at Cleanovative we cater for every after party cleaning services. While you grab a coffee and enjoy the memories of your crazy night, our experienced team will help you clean your entire house or event with quality products and make it spotless. Our areas of focus are pool, lounge, back deck and other areas where the fun happens. <br> <br> Let us take the stress for you and show you how the professionals does it at Cleanovative,Call us in 1800 xxx xxx and in less than a minute get a quote and book us for your crazy party aftermath.",
        ];
        $five_data = [
            'title' => 'Construction Cleaning',
            'content' => "Worried about the mess made after construction work? A post-construction property becomes hazardous for our tradies and you due to the mess made. At Cleanovative our professional and certified cleaners will make sure your new property is safe, breathable and spotless when you walk in, so you and your loved ones can actually feel like it's brand new. <br> <br> Please call us on 180 xxx xxx to discuss a construction cleaning service on your property",
        ];
        $six_data = [
            'title' => 'Strata Cleaning',
            'content' => "Strata is one of the major maintenance industries for real-estate. At Cleanovative, we make sure our professional team keeps your housing clean and spotless, making a safe and hygienic environment for all tenants in the building. We work with the construction & building committee and site managers to keep all pub areas and amenities clean and hygenic. Cleanovative provides a top class standard to all strata properties. <br> <br> Please call us on 180 xxx xxx to discuss maintenance on your strata property",
        ];
        $seven_data = [
            'title' => 'Other Commercial Cleaning',
            'content' => "Apart from the specialist industry-based cleaning, Cleanovative can also provide generalist building cleaning services for all types of Sydney businesses. <br> <br> We can clean Schools, Childcare, Offices, Industrial, Warehouses, Restaurants/cafes, Leisure/sport centres, Gyms, Hotels, Retreats, Showrooms & Retail outlets , Stadium, bank branches and many more. <br> <br> Please call us on 0401396554 to discuss our services on your site.",
        ];
        $data['one'] = $one_data;
        $data['two'] = $two_data;
        $data['three'] = $three_data;
        $data['four'] = $four_data;
        $data['five'] = $five_data;
        $data['six'] = $six_data;
        $data['seven'] = $seven_data;

        return $data;
    }
}
