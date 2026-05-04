'use client'

import Link from 'next/link'
import { Menu, X } from 'lucide-react'
import { useState } from 'react'

export default function Header() {
  const [menuOpen, setMenuOpen] = useState(false)

  const navigation = [
    { label: 'Event', href: '#event' },
    { label: 'Why Join', href: '#why-join' },
    { label: 'Speakers', href: '#speakers' },
    { label: 'Schedule', href: '#schedule' },
    { label: 'Sponsors', href: '#sponsors' },
  ]

  return (
    <header className="sticky top-0 z-50 bg-white shadow-md">
      <div className="container mx-auto px-4 py-4">
        <div className="flex items-center justify-between">
          <Link href="/" className="text-2xl font-bold text-primary">
            IndabaX <span className="text-dark">Gambia</span>
          </Link>

          <nav className="hidden md:flex gap-8">
            {navigation.map((item) => (
              <a
                key={item.href}
                href={item.href}
                className="text-gray-600 hover:text-primary transition-colors font-medium"
              >
                {item.label}
              </a>
            ))}
          </nav>

          <div className="hidden md:flex gap-4">
            <a
              href="https://docs.google.com/forms/d/e/1FAIpQLScMO0feFXXiCUNxzRPUWJ6Yh4aVuKIV8JTMZE6PCXEuJxAMHg/viewform"
              target="_blank"
              rel="noopener noreferrer"
              className="px-6 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-all font-semibold"
            >
              Apply Now
            </a>
          </div>

          <button
            className="md:hidden"
            onClick={() => setMenuOpen(!menuOpen)}
            aria-label="Toggle menu"
          >
            {menuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {menuOpen && (
          <nav className="md:hidden mt-4 pb-4 flex flex-col gap-4">
            {navigation.map((item) => (
              <a
                key={item.href}
                href={item.href}
                className="text-gray-600 hover:text-primary transition-colors font-medium"
                onClick={() => setMenuOpen(false)}
              >
                {item.label}
              </a>
            ))}
            <a
              href="https://docs.google.com/forms/d/e/1FAIpQLScMO0feFXXiCUNxzRPUWJ6Yh4aVuKIV8JTMZE6PCXEuJxAMHg/viewform"
              target="_blank"
              rel="noopener noreferrer"
              className="px-6 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-all font-semibold text-center"
            >
              Apply Now
            </a>
          </nav>
        )}
      </div>
    </header>
  )
}
