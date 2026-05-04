import type { Metadata } from 'next'
import Header from '@/components/Header'
import Footer from '@/components/Footer'
import './globals.css'

export const metadata: Metadata = {
  title: 'IndabaX Gambia 2023 - Deep Learning Conference',
  description: 'Deep Learning IndabaX Gambia - A three-day conference on the Application of Deep Learning in Agriculture',
  keywords: ['IndabaX', 'AI', 'Deep Learning', 'Conference', 'Gambia', 'Machine Learning'],
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body className="bg-white">
        <Header />
        {children}
        <Footer />
      </body>
    </html>
  )
}
