<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder  extends Seeder
{
  public function run(): void
  {
    Product::insert([

      [
        'name' => 'Nike Air Zoom Pegasus 40',
        'image' => 'pegasus40.jpg',
        'price' => 130.00,
        'saleprice' => 104.99,
        'description' => 'A springy ride for every run, the Pegasus returns with a familiar feel to help you accomplish your goals.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Adidas Ultraboost Light Running Shoes',
        'image' => 'ultraboost_light.jpg',
        'price' => 190.00,
        'saleprice' => null,
        'description' => 'Experience epic energy with the new Ultraboost Light, our lightest Ultraboost ever made with Boost material.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Puma Future Ultimate FG Football Boots',
        'image' => 'puma_future.jpg',
        'price' => 220.00,
        'saleprice' => 180.00,
        'description' => 'Inspired by Neymar Jr style, the re-engineered upper combines FUZIONFIT360 and PWRTAPE for ultimate lockdown.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Under Armour Hover Phantom 3',
        'image' => 'ua_phantom3.jpg',
        'price' => 140.00,
        'saleprice' => null,
        'description' => 'The soft, stretchy UA IntelliKnit upper provides a super-breathable, sock-like fit and feel.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Asics Gel-Nimbus 25 Performance',
        'image' => 'gel_nimbus25.jpg',
        'price' => 160.00,
        'saleprice' => 145.00,
        'description' => 'The soft cushioning properties help you feel like you are landing on clouds during your long distance training.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Nike Mercurial Vapor 15 Academy',
        'image' => 'mercurial_vapor.jpg',
        'price' => 85.00,
        'saleprice' => null,
        'description' => 'Look fast, play fast. Features a Zoom Air unit in the heel for responsive cushioning on firm ground.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Adidas Copa Pure.2 Leather Cleats',
        'image' => 'copa_pure.jpg',
        'price' => 120.00,
        'saleprice' => 95.00,
        'description' => 'Connect with the ball in comfort. Soft leather forefoot offers flawless touch and premium durability.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Reebok Nano X3 Training Shoes',
        'image' => 'reebok_nano.jpg',
        'price' => 150.00,
        'saleprice' => null,
        'description' => 'The ultimate training shoes for CrossFit and gym workouts. Features the Lift and Run Chassis system.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'New Balance Fresh Foam 1080v12',
        'image' => 'nb_freshfoam.jpg',
        'price' => 165.00,
        'saleprice' => 139.99,
        'description' => 'Premium underfoot comfort meets cutting-edge performance. Designed to provide luxurious cushioning.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Salomon Speedcross 6 Trail Runners',
        'image' => 'salomon_speedcross.jpg',
        'price' => 140.00,
        'saleprice' => null,
        'description' => 'True to its legendary roots, this version is lighter with a powerful, grippy connection to the trail.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Mizuno Wave Rider 27',
        'image' => 'mizuno_rider.jpg',
        'price' => 140.00,
        'saleprice' => 110.00,
        'description' => 'Maintain your energy levels with this shoe featuring a smooth transition and incredible cushioning.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Saucony Endorphin Speed 3',
        'image' => 'saucony_endorphin.jpg',
        'price' => 170.00,
        'saleprice' => null,
        'description' => 'Features a newly designed winged nylon plate that better supports and propels your daily training runs.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Brooks Ghost 15 Cushion Shoes',
        'image' => 'brooks_ghost.jpg',
        'price' => 140.00,
        'saleprice' => null,
        'description' => 'One of our most-loved running shoes. Features a smooth ride and trusted fit runners adore.',
        'featured' => 0,
        'categoryId' => 1
      ],
      [
        'name' => 'Nike Metcon 9 Gym Shoe',
        'image' => 'nike_metcon9.jpg',
        'price' => 150.00,
        'saleprice' => 125.00,
        'description' => 'Whatever your "why" is for working out, the Metcon 9 makes it all worth it with an enlarged Hyperlift plate.',
        'featured' => 1,
        'categoryId' => 1
      ],
      [
        'name' => 'Adidas Predator Accuracy.3 FG',
        'image' => 'predator_accuracy.jpg',
        'price' => 90.00,
        'saleprice' => null,
        'description' => 'Control + accuracy = confidence. High-definition texture on the strike zone guarantees perfect passing.',
        'featured' => 0,
        'categoryId' => 1
      ],


      [
        'name' => 'Giro Fixture MIPS Bike Helmet',
        'image' => 'giro_fixture.jpg',
        'price' => 70.00,
        'saleprice' => 59.95,
        'description' => 'Features an integrated Multi-Directional Impact Protection System for confidence on the mountain trails.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Bell Super Air R Convertible Helmet',
        'image' => 'bell_super_air.jpg',
        'price' => 299.99,
        'saleprice' => null,
        'description' => 'The pioneer of removable chin bar technology, built for aggressive trail and downhill riders.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Riddell SpeedFlex Football Helmet',
        'image' => 'riddell_speedflex.jpg',
        'price' => 420.00,
        'saleprice' => 395.00,
        'description' => 'The leading helmet choice in professional football leagues, engineered to reduce impact forces.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Rawlings Mach Alpha Baseball Helmet',
        'image' => 'rawlings_mach.jpg',
        'price' => 45.00,
        'saleprice' => null,
        'description' => 'Designed for the batter requiring high-performance protection without sacrificing peripheral vision.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Bauer Reakt 85 Ice Hockey Helmet',
        'image' => 'bauer_reakt.jpg',
        'price' => 139.99,
        'saleprice' => 119.99,
        'description' => 'Equipped with defense foam layers for elite protection against multi-directional impacts on the ice rink.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Triple Eight Dual Certified Skate',
        'image' => 'triple8_skate.jpg',
        'price' => 55.00,
        'saleprice' => null,
        'description' => 'Classic shape approved for both bicycle and skateboard safety compliance standards worldwide.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Fox Racing Speedframe Pro Trail',
        'image' => 'fox_speedframe.jpg',
        'price' => 179.95,
        'saleprice' => 149.95,
        'description' => 'Premium open-face mountain bike helmet designed with input from professional mountain athletes.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Schutt F7 VTD Collegiate Helmet',
        'image' => 'schutt_f7.jpg',
        'price' => 495.00,
        'saleprice' => null,
        'description' => 'Advanced TPU cushioning system layers strategically arranged to absorb high-impact tackles.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Oakley ARO5 Road Cycling Helmet',
        'image' => 'oakley_aro5.jpg',
        'price' => 190.00,
        'saleprice' => 150.00,
        'description' => 'Tuned for speed and ready for heart-pounding sprint finishes with aerodynamic integration.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Smith Mainline Full Face MTB',
        'image' => 'smith_mainline.jpg',
        'price' => 310.00,
        'saleprice' => null,
        'description' => 'Downhill certified protective equipment with lightweight Aerocore honeycomb structures.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Nutcase Street Multi-Sport Helmet',
        'image' => 'nutcase_street.jpg',
        'price' => 80.00,
        'saleprice' => 65.00,
        'description' => 'Brings industrial-strength safety to commuters with stylish urban graphic patterns.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Specialized Align II MIPS',
        'image' => 'specialized_align.jpg',
        'price' => 55.00,
        'saleprice' => null,
        'description' => 'Clean aesthetic design providing high-tier rotational force dispersion at an accessible budget.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Kask Protone Icon Road Helmet',
        'image' => 'kask_protone.jpg',
        'price' => 299.95,
        'saleprice' => null,
        'description' => 'Redesigned internal frame construction limits drag while promoting ventilation across your scalp.',
        'featured' => 1,
        'categoryId' => 2
      ],
      [
        'name' => 'Bern Watts 2.0 EPS Multi-Sport',
        'image' => 'bern_watts.jpg',
        'price' => 99.99,
        'saleprice' => 79.99,
        'description' => 'Features a built-in brim style silhouette built to withstand rugged skate and snow environments.',
        'featured' => 0,
        'categoryId' => 2
      ],
      [
        'name' => 'Nike Dri-FIT Challenger Trousers',
        'image' => 'nike_challenger.jpg',
        'price' => 75.00,
        'saleprice' => 60.00,
        'description' => 'Sweat-wicking woven construction with snap-button storage to securely house your smartphone device.',
        'featured' => 1,
        'categoryId' => 3
      ],
      [
        'name' => 'Adidas Tiro 23 League Track Pants',
        'image' => 'adidas_tiro23.jpg',
        'price' => 55.00,
        'saleprice' => null,
        'description' => 'Born for the beautiful game. Tapered fit with moisture-absorbing Aeroready tech and ankle zippers.',
        'featured' => 1,
        'categoryId' => 3
      ],
      [
        'name' => 'Under Armour Sportstyle Joggers',
        'image' => 'ua_joggers.jpg',
        'price' => 60.00,
        'saleprice' => 45.00,
        'description' => 'Durable knit fabric with a smooth face and a soft inner layer to trap natural muscle warmth.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'Puma Evostripe Mens Sweatpants',
        'image' => 'puma_evostripe.jpg',
        'price' => 65.00,
        'saleprice' => null,
        'description' => 'Articulated cut lines allow improved flexibility while moving. Features dual side zip pockets.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'Gymshark Arrival Slim Fit Joggers',
        'image' => 'gymshark_arrival.jpg',
        'price' => 45.00,
        'saleprice' => 35.00,
        'description' => 'Lightweight material designed for minimal restriction during heavy gym lifting sessions.',
        'featured' => 1,
        'categoryId' => 3
      ],
      [
        'name' => 'Reebok Identity Fleece Pants',
        'image' => 'reebok_fleece.jpg',
        'price' => 50.00,
        'saleprice' => null,
        'description' => 'Soft brushed inner lining provides everyday comfort from gym benches to weekend relaxation lounging.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'Lululemon Surge Running Tights',
        'image' => 'lululemon_surge.jpg',
        'price' => 118.00,
        'saleprice' => null,
        'description' => 'Weightless coverage crafted from Luxtreme fabric properties with dedicated reflective visibility details.',
        'featured' => 1,
        'categoryId' => 3
      ],
      [
        'name' => 'Columbia Rebel Roamer Waterproof',
        'image' => 'columbia_pants.jpg',
        'price' => 80.00,
        'saleprice' => 64.99,
        'description' => 'Omni-Tech seam-sealed waterproof engineering blocks heavy rainfall on harsh outdoor trail hikes.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'The North Face Exploration Trousers',
        'image' => 'tnf_exploration.jpg',
        'price' => 95.00,
        'saleprice' => null,
        'description' => 'FlashDry moisture management material stretches dynamically with an athletic regular fit cut.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'ASICS Essentials Knit Track Pants',
        'image' => 'asics_knit_pants.jpg',
        'price' => 50.00,
        'saleprice' => 39.99,
        'description' => 'Ankle zip expansions allow easy removal over muddy athletic shoes mid-workout fields.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'Canterbury Vaposhield Match Track',
        'image' => 'canterbury_pants.jpg',
        'price' => 75.00,
        'saleprice' => null,
        'description' => 'Water-resistant surface shell explicitly built to withstand rough rugby training match drills.',
        'featured' => 1,
        'categoryId' => 3
      ],
      [
        'name' => 'Fila Retro Heritage Track Pants',
        'image' => 'fila_heritage.jpg',
        'price' => 60.00,
        'saleprice' => 42.00,
        'description' => 'Bold color-blocked side stripes invoke standard classic late 90s athletic fashion styles.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => 'Mizuno Alpha Running Tights',
        'image' => 'mizuno_tights.jpg',
        'price' => 55.00,
        'saleprice' => null,
        'description' => 'Compression-fit panel design optimizes muscular oxygen distribution over intense cardio sprints.',
        'featured' => 0,
        'categoryId' => 3
      ],
      [
        'name' => '2XU MCS Cross Training Compression',
        'image' => '2xu_mcs.jpg',
        'price' => 120.00,
        'saleprice' => 99.00,
        'description' => 'Muscle Containment Stamping technology targets quad groups to mitigate heavy explosive lift strain.',
        'featured' => 1,
        'categoryId' => 3
      ],

      [
        'name' => 'Nike Dri-FIT Legend Fitness Tee',
        'image' => 'nike_legend.jpg',
        'price' => 30.00,
        'saleprice' => null,
        'description' => 'Highly breathable active top treated with anti-odor properties to ensure fresh workout routines.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Adidas Own The Run Mesh Top',
        'image' => 'adidas_otr.jpg',
        'price' => 35.00,
        'saleprice' => 28.00,
        'description' => 'Engineered mesh fabrics maximize environmental ventilation paths on scorching hot summer jogs.',
        'featured' => 1,
        'categoryId' => 4
      ],
      [
        'name' => 'Under Armour Tech 2.0 Short Sleeve',
        'image' => 'ua_tech2.jpg',
        'price' => 25.00,
        'saleprice' => null,
        'description' => 'The original UA training fabric is quick-drying, ultra-soft & has a more natural feel.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Puma Train Favorite Poly Blouse',
        'image' => 'puma_train_top.jpg',
        'price' => 28.00,
        'saleprice' => 19.95,
        'description' => 'Ergonomic lines reduce fabric friction points over continuous high-intensity crossfit drills.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Gymshark Crest Long Sleeve Hoodie',
        'image' => 'gymshark_crest.jpg',
        'price' => 50.00,
        'saleprice' => null,
        'description' => 'Slim cut pullover top using soft cotton blend structures ideal for cool pre-workout warmups.',
        'featured' => 1,
        'categoryId' => 4
      ],
      [
        'name' => 'Reebok Workout Ready Compression',
        'image' => 'reebok_comp.jpg',
        'price' => 35.00,
        'saleprice' => 25.00,
        'description' => 'Locks tight skin-to-skin surface tension to enhance posture alignment during barbell lifts.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Nike Academy Drill Pro Top',
        'image' => 'nike_academy.jpg',
        'price' => 65.00,
        'saleprice' => null,
        'description' => 'Quarter-zip midlayer top with built-in hidden thumbholes extending cold weather sleeve coverage.',
        'featured' => 1,
        'categoryId' => 4
      ],
      [
        'name' => 'Adidas Techfit Fitted Base Layer',
        'image' => 'adidas_techfit.jpg',
        'price' => 40.00,
        'saleprice' => 32.00,
        'description' => 'Focuses your muscles energy to generate explosive acceleration power across outdoor fields.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Skins Series-3 Long Sleeve Top',
        'image' => 'skins_s3.jpg',
        'price' => 90.00,
        'saleprice' => null,
        'description' => 'Elite targeted compression gradients increase venous blood return to accelerate post-workout recovery.',
        'featured' => 1,
        'categoryId' => 4
      ],
      [
        'name' => 'The North Face Sunriser Trail Tee',
        'image' => 'tnf_sunriser.jpg',
        'price' => 45.00,
        'saleprice' => 35.00,
        'description' => 'Lightweight trail apparel engineered with knit front panels keeping chest areas insulated from wind.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Asics Core Sleeveless Singlet',
        'image' => 'asics_singlet.jpg',
        'price' => 25.00,
        'saleprice' => null,
        'description' => 'Zero shoulder restrictions make this lightweight running tank ideal for tracking competitive track laps.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Columbia Zero Rules Cooling Tee',
        'image' => 'columbia_zero.jpg',
        'price' => 50.00,
        'saleprice' => 39.99,
        'description' => 'Omni-Freeze sweat-activated cooling rings drop material temperature points as your sweat levels rise.',
        'featured' => 1,
        'categoryId' => 4
      ],
      [
        'name' => 'Castelli Squadra Cycling Jersey',
        'image' => 'castelli_jersey.jpg',
        'price' => 85.00,
        'saleprice' => null,
        'description' => 'Form-fitting road biking aerodynamic build featuring deep rear cargo gear storage drop pockets.',
        'featured' => 0,
        'categoryId' => 4
      ],
      [
        'name' => 'Speedo Eco Endurance Rash Vest',
        'image' => 'speedo_rash.jpg',
        'price' => 40.00,
        'saleprice' => null,
        'description' => 'UPF 50+ maximum sun radiation filter block knit built using sustainable eco-conscious threads.',
        'featured' => 0,
        'categoryId' => 4
      ],

      [
        'name' => 'Wilson Evolution Game Basketball',
        'image' => 'wilson_evolution.jpg',
        'price' => 85.00,
        'saleprice' => null,
        'description' => 'The preferred indoor high school match ball featuring a microfiber composite grip layer.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Spalding TF-1000 Classic Indoor',
        'image' => 'spalding_tf1000.jpg',
        'price' => 90.00,
        'saleprice' => 79.99,
        'description' => 'Deep channel leather structural configurations optimize shooting control for advanced players.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Nike Flight Elite Premier Soccer Ball',
        'image' => 'nike_flight_ball.jpg',
        'price' => 160.00,
        'saleprice' => 135.00,
        'description' => 'Molded grooves disrupt standard aerodynamic drag loops to deliver a 30% truer mid-air flight path.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Adidas MLS Pro Official Match Ball',
        'image' => 'adidas_mls.jpg',
        'price' => 165.00,
        'saleprice' => null,
        'description' => 'Thermally bonded seamless panel architecture matches official elite professional pitch ball requirements.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Molten BG4500 FIBA Basketball',
        'image' => 'molten_fiba.jpg',
        'price' => 100.00,
        'saleprice' => 85.00,
        'description' => 'Official FIBA approved 12-panel contrast layout maximizes tactical court rotation tracking sightlines.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Gilbert Sirius Match Rugby Ball',
        'image' => 'gilbert_sirius.jpg',
        'price' => 140.00,
        'saleprice' => null,
        'description' => 'Grip texture explicitly engineered to maintain friction bounds across slippery, rain-soaked matches.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Wilson US Open Heavy Duty Tennis 4-Pack',
        'image' => 'wilson_tennis.jpg',
        'price' => 12.00,
        'saleprice' => null,
        'description' => 'Premium thick felt fibers prolong court life cycles on abrasive hard surface courts.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Mikasa V200W Olympic Volleyball',
        'image' => 'mikasa_v200w.jpg',
        'price' => 110.00,
        'saleprice' => 95.00,
        'description' => 'Perfectly balanced 18-panel aerodynamic design with double-dimple surfaces to stabilize flight paths.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Titleist Pro V1 Golf Balls Dozen',
        'image' => 'titleist_prov1.jpg',
        'price' => 55.00,
        'saleprice' => null,
        'description' => 'The #1 ball in golf. Deliver long-distance drop streams alongside ultimate greenside spin management controls.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Callaway Chrome Soft Trio Box',
        'image' => 'callaway_chrome.jpg',
        'price' => 50.00,
        'saleprice' => 42.50,
        'description' => 'Hyper-elastic soft core profiles elevate launch speeds for players with moderate swing metrics.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Sells Total Contact Soccer Ball',
        'image' => 'sells_soccer.jpg',
        'price' => 60.00,
        'saleprice' => null,
        'description' => 'Hand-stitched heavy synthetic leather bounds designed for continuous youth training clubs.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Kookaburra Turf Cricket Match Ball',
        'image' => 'kookaburra_turf.jpg',
        'price' => 125.00,
        'saleprice' => null,
        'description' => 'Official choice for test matches worldwide. Five-layer quilted center wrapped in premium alum-tanned steer hide.',
        'featured' => 1,
        'categoryId' => 5
      ],
      [
        'name' => 'Steden Low Bounce Futsal Ball',
        'image' => 'steden_futsal.jpg',
        'price' => 45.00,
        'saleprice' => 35.00,
        'description' => 'Stuffed bladder interior dynamics restrict bounce limits matching official hardcourt indoor rules.',
        'featured' => 0,
        'categoryId' => 5
      ],
      [
        'name' => 'Baden Elite Competition Leather',
        'image' => 'baden_elite.jpg',
        'price' => 80.00,
        'saleprice' => null,
        'description' => 'Proprietary moisture-stealing external wrap prevents ball slippage off sweaty palms.',
        'featured' => 0,
        'categoryId' => 5
      ],



      [
        'name' => 'Speedo Vanquisher 2.0 Swim Goggles',
        'image' => 'swimGoggles.jpg',
        'price' => 29.99,
        'saleprice' => 24.50,
        'description' => 'Precision fit, sleek low-profile inner eye fit goggles. Anti-fog coating with UV protection for competitive swimmers.',
        'featured' => 1,
        'categoryId' => 6,
      ],
      [
        'name' => 'Wilson Evolution Indoor Basketball',
        'image' => 'indoorBasketball.jpg',
        'price' => 79.95,
        'saleprice' => null,
        'description' => 'The #1 indoor game basketball in America. Microfiber composite cover provides a soft feel and maximum grip control.',
        'featured' => 1,
        'categoryId' => 6,
      ],
      [
        'name' => 'Giro Fixture MIPS Bike Helmet',
        'image' => 'bikeHelmet.jpg',
        'price' => 85.00,
        'saleprice' => 69.99,
        'description' => 'Mountain bike helmet featuring the Multi-Directional Impact Protection System -MIPS- for enhanced safety on trails.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Babolat Pure Drive Tennis Racquet',
        'image' => 'tennisRacquet.jpg',
        'price' => 249.00,
        'saleprice' => null,
        'description' => 'Unleash explosive power on the court. Designed for intermediate to advanced players looking for spin and control.',
        'featured' => 1,
        'categoryId' => 6,
      ],
      [
        'name' => 'CamelBak Podium Chill 620ml Bottle',
        'image' => 'podiumChill.jpg',
        'price' => 22.00,
        'saleprice' => 18.90,
        'description' => 'Double-walled insulation keeps your water cold twice as long. High-flow, self-sealing jet valve eliminates spills.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Rawlings Pro Preferred Baseball Glove',
        'image' => 'baseballGlove.jpg',
        'price' => 359.95,
        'saleprice' => null,
        'description' => 'Full-grain kip leather creates a rich look and premium feel. Chosen by top professional baseball athletes globally.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Black Diamond Trail Trekking Poles',
        'image' => 'hikingPoles.jpg',
        'price' => 119.99,
        'saleprice' => 99.95,
        'description' => 'Dual FlickLock adjustability for varied terrain. Durable ergonomic grips ideal for long-distance trail hiking.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Arena Cobra Ultra Swipe Goggles',
        'image' => 'arenaGoggles.jpg',
        'price' => 75.00,
        'saleprice' => null,
        'description' => 'Hydrodynamic racing goggles with Swipe Anti-Fog technology. Clears fog instantly with a simple swipe of the finger.',
        'featured' => 1,
        'categoryId' => 6,
      ],
      [
        'name' => 'Cressi Palau Snorkeling Fins Set',
        'image' => 'snorkelingSet.jpg',
        'price' => 64.95,
        'saleprice' => 52.00,
        'description' => 'Adjustable open-heel short fins ideal for snorkeling and swimming. Includes mesh carrying bag.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Spalding NBA Slam Jam Over-The-Door Hoop',
        'image' => 'miniHoop.jpg',
        'price' => 45.00,
        'saleprice' => null,
        'description' => 'Mini indoor basketball hoop styled after official NBA boards. Spring-action breakaway steel rim.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Shock Doctor Gel Max Mouthguard',
        'image' => 'mouthguard.jpg',
        'price' => 19.99,
        'saleprice' => 14.99,
        'description' => 'Heavy-duty rubber Exoskeletal Shock Frame provides maximum protection for hockey, rugby, and contact sports.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'STX Stallion 50 Lacrosse Stick',
        'image' => 'lacrosseStick.jpg',
        'price' => 49.95,
        'saleprice' => null,
        'description' => 'Complete beginner lacrosse stick designed to help developing players catch and pass with confidence.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'Callaway Chrome Soft Golf Balls - Dozen',
        'image' => 'golfBalls.jpg',
        'price' => 54.99,
        'saleprice' => 47.95,
        'description' => 'Precision Technology delivers outstanding distance and soft feel for golfers demanding tour-level performance.',
        'featured' => 1,
        'categoryId' => 6,
      ],
      [
        'name' => 'Titleist Vokey SM9 Wedges',
        'image' => 'golfWedge.jpg',
        'price' => 199.00,
        'saleprice' => null,
        'description' => 'Ultimate shot versatility and precise distance control. Advanced engineering for maximum spin on greens.',
        'featured' => 0,
        'categoryId' => 6,
      ],
      [
        'name' => 'TaylorMade Select ST Stand Bag',
        'image' => 'golfBag.jpg',
        'price' => 189.99,
        'saleprice' => 165.00,
        'description' => 'Lightweight stand bag with a 7-way top system and multiple pockets for maximum course utility.',
        'featured' => 0,
        'categoryId' => 6,
      ],


      [
        'name' => 'TRX ALL-IN-ONE Suspension Trainer',
        'image' => 'trxSystem.jpg',
        'price' => 199.95,
        'saleprice' => 179.99,
        'description' => 'Full-body workout system using bodyweight. Perfect for home gyms and traveling fitness enthusiasts.',
        'featured' => 1,
        'categoryId' => 7,
      ],
      [
        'name' => 'Bowflex SelectTech 552 Adjustable Dumbbells',
        'image' => 'adjustableDumbbells.jpg',
        'price' => 429.00,
        'saleprice' => null,
        'description' => 'Replaces 15 pairs of traditional dumbbells. Dial adjusts weight from 2kg up to 24kg instantly.',
        'featured' => 1,
        'categoryId' => 7,
      ],
      [
        'name' => 'Rogue Fitness Ohio Bar 20kg',
        'image' => 'ohioBarbell.jpg',
        'price' => 295.00,
        'saleprice' => null,
        'description' => 'The standard for Olympic weightlifting and powerlifting. Exceptional steel knurling for ultimate grip.',
        'featured' => 1,
        'categoryId' => 7,
      ],
      [
        'name' => 'Manduka PRO Yoga Mat 6mm',
        'image' => 'yogaMat.jpg',
        'price' => 129.00,
        'saleprice' => 110.00,
        'description' => 'Ultra-dense cushioning provides superior joint support and longevity. Closed-cell surface prevents sweat absorption.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Fitbit Charge 5 Fitness Tracker',
        'image' => 'fitbitTracker.jpg',
        'price' => 149.95,
        'saleprice' => 129.99,
        'description' => 'Advanced fitness and health tracker with built-in GPS, 24/7 heart rate tracking, and stress management.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Nike Fundamental Speed Rope',
        'image' => 'speedRope.jpg',
        'price' => 25.00,
        'saleprice' => null,
        'description' => 'Fast-spinning jump rope with ball bearing handles. Easily adjustable length for cardio warm-ups.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Theragun Prime Percussive Massager',
        'image' => 'massageGun.jpg',
        'price' => 299.00,
        'saleprice' => 249.00,
        'description' => 'Deep tissue muscle therapy device for fast relief and recovery. 5 speed settings with smart app connectivity.',
        'featured' => 1,
        'categoryId' => 7,
      ],
      [
        'name' => 'Under Armour Undeniable 5.0 Duffle',
        'image' => 'gymDuffle.jpg',
        'price' => 45.00,
        'saleprice' => null,
        'description' => 'Water-resistant gym bag with a large vented pocket for laundry or shoes and inner organization slots.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Harbinger Padded Cotton Lifting Straps',
        'image' => 'liftingStraps.jpg',
        'price' => 15.00,
        'saleprice' => 11.99,
        'description' => 'Extended 21-inch strap length for a stronger wrap on standard barbells. Neotek padding cushions wrists.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Everlast Dual Station Heavy Bag Stand',
        'image' => 'punchingBagStand.jpg',
        'price' => 179.99,
        'saleprice' => null,
        'description' => 'Rugged powder-coated steel tubing. Holds punching bags up to 100 lbs along with a speed bag platform.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'RDX Weight Lifting Leather Belt',
        'image' => 'liftingBelt.jpg',
        'price' => 38.50,
        'saleprice' => null,
        'description' => '4-inch wide oil-tanned nubuck leather belt providing core stability during heavy deadlifts and squats.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'Gatorade 32oz Squeeze Bottle',
        'image' => 'gatoradeBottle.jpg',
        'price' => 12.00,
        'saleprice' => 8.99,
        'description' => 'Classic contour squeeze design with a hands-free pressure-release valve for quick hydration.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'TriggerPoint GRID Foam Roller',
        'image' => 'foamRoller.jpg',
        'price' => 39.95,
        'saleprice' => null,

        'description' => 'Patented multi-density exterior design over a rigid hollow core. Excellent for rolling out sore muscle knots.',
        'featured' => 1,
        'categoryId' => 7,
      ],
      [
        'name' => 'Iron Gym Total Upper Body Workout Bar',
        'image' => 'pullupBar.jpg',
        'price' => 34.99,
        'saleprice' => 29.99,
        'description' => 'Multi-function doorway pull-up bar. Installs in seconds without drilling. Fits standard door frames.',
        'featured' => 0,
        'categoryId' => 7,
      ],
      [
        'name' => 'BlenderBottle Classic 28oz Shaker',
        'image' => 'shakerBottle.jpg',
        'price' => 14.50,
        'saleprice' => null,
        'description' => 'Includes surgical-grade BlenderBall wire whisk for perfectly smooth protein shakes and pre-workout blends.',
        'featured' => 0,
        'categoryId' => 7,
      ],
    ]);
  }
}
