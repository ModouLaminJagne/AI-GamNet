'use client'

import { MapPin, Calendar, Mic, BookOpen } from 'lucide-react'

const eventDetails = [
  {
    icon: MapPin,
    title: 'Location',
    content: 'University of The Gambia, Peace Building, Kanifing',
  },
  {
    icon: Calendar,
    title: 'Date & Time',
    content: '08h30 - 17h00, July 25 - 27, 2023',
  },
  {
    icon: Mic,
    title: 'Speakers',
    content: '12 Tech Icons and Professionals',
  },
  {
    icon: BookOpen,
    title: 'Participants',
    content: '70 People',
  },
]

export default function EventDetails() {
  return (
    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      {eventDetails.map((detail, index) => {
        const Icon = detail.icon
        return (
          <div
            key={index}
            className="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow"
          >
            <Icon className="w-8 h-8 text-primary mb-4" />
            <h4 className="text-lg font-bold mb-2">{detail.title}</h4>
            <p className="text-gray-600">{detail.content}</p>
          </div>
        )
      })}
    </div>
  )
}
