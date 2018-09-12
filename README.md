# bizly-react-native-laravel-app
Bizly app exercise - React Native using a RESTful Laravel API powered by a relational (MySQL) DB

**Notes & Assumptions**
1. Scope - Omitted venue inventory data models, authentication, and the overall booking funnel / booking engine (obviously) along with some other more granular components such as ratings, etc.
2. Locations / addresses follow the Schema.org guidelines to support internationalization.
3. Data models (and corresponding seed data), app navigation, and API endpoints were all derived from the current web app within the "Individual" context.
4. Assumed a venue / location constraint of 1 per event / booking which may not support all future use cases (i.e. larger events may require multiple rooms and venue locations).
6. The local "dev" .env file is included for convenience as it's just an exercise - I usually just include details on what vars & values should be included in your local .env config within the README.md or the ".env.example" to facilitate a seamless engineer onboarding experience. For this, it's just pushed as-is locally.


_Below is a high-level overview of our data models for this exercise_

**BIZLY DATA MODELS**

Venue
- (PK) ID
- (FK) VenueType ID
- (FK) Location ID
- Name
- Contact

VenueTypes
- (PK) ID
- Name

(seed data) 
[ Hotel, 
  Restaurant, 
  Activity, 
  Conference Center, 
  Corporate Office ]

BizlyEvent
- (PK) ID
- (FK) Venue ID
- (FK) EventType ID
- (FK) Organizer ID
- Name
- Details
- DateFrom
- DateTo
- Image URL
- Thumb URL

EventType
- (PK) ID
- Name

(seed data)
[ Creative Inspiration, 
  Impressing a Client, 
  Presentations, 
  Strategy Sessions, 
  Team Offsites, 
  Video Conferencing, 
  Airport Convenience,
  Board Meetings,
  Brainstorming,
  Business Dining,
  Casual Gatherings,
  Celebrations ]

User
- (PK) ID
- (FK) Location ID
- (BOOL) Confirmed
- (Unique) Username
- (Unique) Email
- Phone
- First Name
- Middle Name
- Last Name
- Birthday
- Last Login DateTime

Location
- (PK) ID
- Street Address
- Locality
- Region
- Postal Code

Attendees (lookup table)
- (FK) BizlyEvent ID
- (FK) User ID

Inventory
- (PK) ID
- (FK) Venue ID
- Guest Capacity
- Image URL
- Thumb URL

Booking
- (PK) ID
- (FK) User ID
- (FK) BizlyEvent ID
- (FK) Inventory ID
- Date
