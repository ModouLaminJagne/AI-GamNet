import Hero from '@/components/Hero'
import EventDetails from '@/components/EventDetails'
import WhyJoin from '@/components/WhyJoin'
import PersonGrid from '@/components/PersonGrid'
import Schedule from '@/components/Schedule'
import Sponsors from '@/components/Sponsors'
import { speakers, organizers, volunteers } from '@/data/people'
import { eventInfo } from '@/data/event'

export default function Home() {
  return (
    <main className="min-h-screen">
      {/* Hero Section */}
      <Hero />

      {/* Event Details */}
      <section id="event" className="py-16">
        <div className="container mx-auto px-4">
          <div className="mb-12">
            <h2 className="text-4xl font-bold text-dark mb-4 text-center animate-slideIn">
              About This Event
            </h2>
            <p className="text-lg text-gray-600 max-w-3xl mx-auto text-center mb-12">
              {eventInfo.description}
            </p>
          </div>
          <EventDetails />
        </div>
      </section>

      {/* Why Join */}
      <WhyJoin />

      {/* Speakers */}
      <PersonGrid
        title="Meet Our Speakers"
        subtitle="Speakers whose focus are on data science, with plans to develop a vibrant research group on data science in The Gambia."
        people={speakers}
      />

      {/* Schedule */}
      <Schedule />

      {/* Sponsors */}
      <Sponsors />

      {/* Organizers */}
      <PersonGrid title="Our Organisers" people={organizers} />

      {/* Volunteers */}
      <PersonGrid title="Volunteer Organisers" people={volunteers} />
    </main>
  )
}
